<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use App\Models\Plan;
use App\Models\Product;
use App\Models\ProductImages;
use Image;
use Illuminate\Http\Request;
use App\Models\Frontend;
use App\Models\Review;

class MlmController extends Controller
{
    public function plan()
    {
        $page_title = 'MLM Plans';
        $empty_message = 'No Plan found';
        $plans = Plan::paginate(getPaginate());;
        return view('admin.plan.index', compact('page_title', 'plans', 'empty_message'));
    }

    public function product()
    {
        $page_title = 'MLM Product';
        $empty_message = 'No Product found';
        $products = Product::paginate(getPaginate());;
        $plans = Plan::all();
        return view('admin.product.index', compact('page_title', 'products', 'empty_message','plans'));
    }

    public function banner()
    {
        $page_title = 'New Arrival Banner';
        $empty_message = 'No Banner found';
        $products = Frontend::where('data_keys','new_arrival_banner')->get();
        return view('admin.new_arrival_banner.index', compact('page_title', 'products', 'empty_message'));
    }

    public function review()
    {
        $page_title = 'MLM Review';
        $empty_message = 'No Review found';
        $products = Review::paginate(getPaginate());
        $plans = Plan::all();
        return view('admin.review.index', compact('page_title', 'products', 'empty_message','plans'));
    }

    

   
    public function reviewApprove(Request $request,$id){
        $review = Review::where('id',$id)->first();
        $review->approved = 1;
        if($review->save()){
            $notify[] = ['success', 'Review Approved successfully'];
        }else{
            $notify[] = ['errors', 'Error Found'];
        }
        return back()->withNotify($notify);
    }
    

    public function reviewDisapprove(Request $request,$id){
        $review = Review::where('id',$id)->first();
        $review->approved = 0;
        if($review->save()){
            $notify[] = ['success', 'Review Disapproved successfully'];
        }else{
            $notify[] = ['errors', 'Error Found'];
        }
        return back()->withNotify($notify);
    }
    


    public function planStore(Request $request)
    {
        $this->validate($request, [
            'name'              => 'required',
            'price'             => 'required|numeric|min:0',
            'bv'                => 'required|min:0|integer',
            'ref_com'           => 'required|numeric|min:0',
            'tree_com'          => 'required|numeric|min:0',
        ]);


        $plan = new Plan();
        $plan->name             = $request->name;
        $plan->price            = $request->price;
        $plan->bv               = $request->bv;
        $plan->ref_com          = $request->ref_com;
        $plan->tree_com         = $request->tree_com;
        $plan->status           = $request->status?1:0;
        $plan->save();

        $notify[] = ['success', 'New Plan created successfully'];
        return back()->withNotify($notify);
    }
    public function bannerStore(Request $request)
    {
        try {
        if ($request->hasFile('file')) {
            $filename = time() . '_' . 'banner' . '.jpg';
            $location = 'assets/images/product/' . $filename;   
            $image = $request->file('file');
            $image = Image::make($image);
            $image->save($location);

            $frontend = new Frontend();
            $frontend->data_keys = 'new_arrival_banner';
            $frontend->data_values = $filename;
            $frontend->save();
       
        }
        }catch (\Exception $exp) {
            $notify[] = ['error', 'Could not upload your ' . $image];
            return back()->withNotify($notify)->withInput();
        }

        $notify[] = ['success', 'New image added successfully'];
        return back()->withNotify($notify);
    }

    public function productStore(Request $request)
    {
        $this->validate($request, [
            'name'              => 'required',
        ]);


        $plan = new Product();
        $plan->name            = $request->name;
        $plan->size            = $request->size;
        $plan->desc            = $request->desc;
        $plan->plan_id         = $request->plan;
        $plan->save();
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $key=>$image) {
                try {
                    
                    $attachment = new ProductImages();
                    $attachment->product_id = $plan->id;
                    $filename = time() . '_' . $key . '.jpg';
                    $location = 'assets/images/product/' . $filename;                  
                    $image = Image::make($image);
                    $image->save($location);
                    $attachment->image_url  = $filename;
                    // $attachment->image_url = uploadImage($image, $path);
                    $attachment->save();

                } catch (\Exception $exp) {
                    $notify[] = ['error', 'Could not upload your ' . $image];
                    return back()->withNotify($notify)->withInput();
                }

            }
        }
        $notify[] = ['success', 'New Plan created successfully'];
        return back()->withNotify($notify);
    }

    public function productDelete(Request $request,$id){
        $products = Product::where('id',$id)->first();
        if($products->delete()){
            $notify[] = ['success', 'Product deleted successfully'];
        }else{
            $notify[] = ['errors', 'Error Found'];
        }
        return back()->withNotify($notify);
    }
    public function reviewDelete(Request $request,$id){
        $review = Review::where('id',$id)->first();
        if($review->delete()){
            $notify[] = ['success', 'Review deleted successfully'];
        }else{
            $notify[] = ['errors', 'Error Found'];
        }
        return back()->withNotify($notify);
    }
    

    public function bannerDelete(Request $request,$id){
        $products = Frontend::where('id',$id)->first();
        if($products->delete()){
            $notify[] = ['success', 'Banner deleted successfully'];
        }else{
            $notify[] = ['errors', 'Error Found'];
        }
        return back()->withNotify($notify);
    }

    public function productUpdate(Request $request){
        $this->validate($request, [
            'id'                => 'required',
            'name'              => 'required',
        ]);

        $plan                   = Product::find($request->id);
        $plan->name             = $request->name;
        $plan->size             = $request->size;
        $plan->desc             = $request->desc;
        $plan->save();

        $notify[] = ['success', 'Product Updated Successfully.'];
        return back()->withNotify($notify);

    }
    public function productEdit(Request $request,$id){
        $products = Product::where('id',$id)->first();
        $page_title = 'MLM Product';
        $productImage = ProductImages::where('product_id',$id)->get();
        return view('admin.product.edit', compact('page_title', 'products','productImage'));

    }


    public function planUpdate(Request $request)
    {
        $this->validate($request, [
            'id'                => 'required',
            'name'              => 'required',
            'price'             => 'required|numeric|min:0',
            'bv'                => 'required|min:0|integer',
            'ref_com'           => 'required|numeric|min:0',
            'tree_com'          => 'required|numeric|min:0',
        ]);

        $plan                   = Plan::find($request->id);
        $plan->name             = $request->name;
        $plan->price            = $request->price;
        $plan->bv               = $request->bv;
        $plan->ref_com          = $request->ref_com;
        $plan->tree_com         = $request->tree_com;
        $plan->status           = $request->status?1:0;
        $plan->save();

        $notify[] = ['success', 'Plan Updated Successfully.'];
        return back()->withNotify($notify);
    }



    public function matchingUpdate(Request $request)
    {
        $this->validate($request, [
            'bv_price' => 'required|min:0',
            'total_bv' => 'required|min:0|integer',
            'max_bv' => 'required|min:0|integer',
        ]);

        $setting = GeneralSetting::first();

        if ($request->matching_bonus_time == 'daily') {
            $when = $request->daily_time;
        } elseif ($request->matching_bonus_time == 'weekly') {
            $when = $request->weekly_time;
        } elseif ($request->matching_bonus_time == 'monthly') {
            $when = $request->monthly_time;
        }


        $setting->bv_price = $request->bv_price;
        $setting->total_bv = $request->total_bv;
        $setting->max_bv = $request->max_bv;
        $setting->cary_flash = $request->cary_flash;
        $setting->matching_bonus_time = $request->matching_bonus_time;
        $setting->matching_when = $when;
        $setting->save();

        $notify[] = ['success', 'Matching bonus has been updated.'];
        return back()->withNotify($notify);

    }


}
