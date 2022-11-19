<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
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
