<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function viewOrders(){

        $ordas=Order::where('status','0')->get();
        return view('admin.orders.index',compact('ordas'));
    }

    public function admiViewOrders($id){
    $orders=Order::where('id',$id)->first();
    return view('admin.orders.view',compact('orders'));
    }

    public function updateOrder(Request $request,$id){

        $order=Order::find($id);
        $order->status=$request->input('order-status');
        $order->update();
        return redirect('orders')->with('success','order updated successifully');
    }

    public function orderHistory(){
        $ordas=Order::where('status','1')->where('user_id',Auth::id())->get();
        return view('admin.orders.orderhistory',compact('ordas'));
    }
}
