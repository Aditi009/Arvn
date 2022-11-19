<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
  public function getOrder(){
    $page_title = 'MLM Order';
    $empty_message = 'No Order found';
    $orders = Order::select('orders.*','plans.name','users.firstname','users.email','users.lastname')->leftJoin('users',function($leftJoin){
        $leftJoin->on('users.id','=','orders.user_id');
    })->leftJoin('plans',function($leftJoin){
        $leftJoin->on('plans.id','=','orders.plan_id');
    })->paginate(getPaginate());
    return view('admin.orders.index', compact('page_title', 'orders', 'empty_message'));
  }
  public function viewOrderShippingAddress($id){
    $orders = Order::find($id);
    $page_title = 'Product Shipping';
    if($orders){  
    $user = User::find($orders->user_id);
    $products = Product::where('plan_id',$orders->plan_id)->get();
    $shipping_name = getOption($orders->user_id,'shipping_name');
    $shipping_zipcode = getOption($orders->user_id,'shipping_zipcode');
    $shipping_city = getOption($orders->user_id,'shipping_city');
    $shipping_state = getOption($orders->user_id,'shipping_state');
    $shipping_full_address = getOption($orders->user_id,'shipping_full_address');
    return view('admin.orders.view', compact('page_title','products', 'orders','shipping_zipcode','shipping_city','shipping_state','shipping_full_address','shipping_name','user'));

    }

  }
  public function updateOrderStatus(Request $request){
      $orders = Order::find($request->id);
      if($orders){
        $orders->status = $request->status;
        if($orders->save()){
            $notify[] = ['success', 'Order Status Updated successfully!'];
            return back()->withNotify($notify);
        }
      }
  }
}
