<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
{
     public function index()
     {
        $old_cartItems=Cart::where('user_id',Auth::id())->get();
              
        foreach($old_cartItems as $item)
        {
           if(Cart::where('id',$item->prod_id)->where('prod_qty','>=',$item->product->quantity)->exists())
           {
              $removeItem=Cart::where('id',$item->prod_id)->where('prod_qty','>=',$item->product->quantity)->first();
              $removeItem->delete(); 
           }
        }
       // console.log($removeItem);
        
        //get the new data from the cart;
        $cartItems=Cart::where('user_id',Auth::id())->get();
        return view('frontend.checkout',compact('cartItems'));
     }

     public function placeorder(Request $request){
        $oder =new Order();
        $oder->user_id=Auth::id();
        $oder->fname=$request->input('firstname');
        $oder->lname=$request->input('lastaname');
        $oder->email=$request->input('email');
        $oder->phone=$request->input('phonenumber');
        $oder->address1=$request->input('address1');
        $oder->address2=$request->input('address2');
        $oder->city=$request->input('city');
        $oder->state	=$request->input('state');
        $oder->country=$request->input('country');
        $oder->pincode=$request->input('pincode');
        $oder->tracking_no='orderNo'.rand(1111,9999);
        //calculating the total price;
        $total=0;
        $cartItems_total=Cart::where('user_id',Auth::id())->get();
        foreach($cartItems_total as $items){
         $total += $items->product->selling_price * $items->prod_qty;
        }
        $oder->total_price = $total;
        $oder->payment_mode = $request->input('payment_mode');
        $oder->payment_id = $request->input('payment_id');
        $oder->save();  


        $oder->id;

        $cartItems=Cart::where('user_id',Auth::id())->get();

        foreach($cartItems as $item){
         OrderItem::create([
          'order_id'=> $oder->id,
          'prod_id' => $item->prod_id,
          'quantity' => $item->prod_qty,
          'price' => $item->product->selling_price,
         ]);

         $prod= Product::where('id',$item->prod_id)->first();
         $prod->quantity=$prod->quantity-$item->prod_qty;
         $prod->update();
        }

        $cartItems=Cart::where('user_id',Auth::id())->get();
        Cart::destroy($cartItems);

        if($request->input('payment_mode')== "paid by razorpay"){
         return response()->json(['status'=> "Order placed successfully"]);  
        }

         return redirect('/')->with('success','order placed successifully');
     }

     public function procedToPay(Request $request){
           $total_price=0;
          $cartItems= Cart::where('user_id',Auth::id())->get();
          foreach($cartItems as $items){
            $total_price += $items->product->selling_price * $items->prod_qty;
         }

            $firstname = $request->input('firstname');
            $lastaname = $request->input('lastaname');
            $email = $request->input('email');
            $phonenumber = $request->input('phonenumber');
            $address1 = $request->input('address1');
            $address2 = $request->input('address2');
            $city = $request->input('city');
            $state = $request->input('state');
            $country = $request->input('country');
            $pincode = $request->input('pincode');
            return response()->json([
                    'firstname' => $firstname, 
                    'lastaname' => $lastaname, 
                    'email'      => $email,
                    'phonenumber'=> $phonenumber,
                    'address1' => $address1,  
                    'address2' => $address2,  
                    'city'  => $city,     
                    'state'  => $state,   
                    'country' => $country,   
                    'pincode' => $pincode,
                    'total_price' => $total_price
            ]);
     }
}
