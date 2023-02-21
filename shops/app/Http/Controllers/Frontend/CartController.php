<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

      //Adding Data to cart
    public function addToCartdata(Request $request)
    {
      $product_id = $request->input('product_id');
      $product_quantity = $request->input('product_qty');
      //return $product_quantity; return false;
   // return 'product_id';
    
      if(Auth::check()){
       $prod_check=Product::where('id',$product_id)->first();
       if($prod_check){

        if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists()){
            return response()->json(['status'=>$prod_check->product_name." already exists"]);
        }
        else
        {
            $cartItem=new Cart();
            $cartItem->user_id=Auth::id();
            $cartItem->prod_id=$product_id;
            $cartItem->prod_qty = $product_quantity;
            $cartItem->save();
            return response()->json(['status'=>$prod_check->product_name." added to cart"]);
             //print_r($cartItem); return false;
             //return $cateItem->prod_qty;
        }
       
       }
    }
      else{
        return response()->json(['status' => "login to continue with shopping"]);
      }
 }

    public function viewcart(){
      $cartItems=Cart::where('user_id',Auth::id())->get();
      return view('frontend.cart',compact('cartItems'));
    }

    public function cartUpdate(Request $request){
      $prod_id=$request->input('productId');
      $prodqty=$request->input('quanty');
      if(Auth::check()){
        if(Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->exists()){
           $cartupdates=Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->first();
           $cartupdates->prod_qty=$prodqty;
           $cartupdates->update();
           return response()->json(['status'=>"Product Quantity updated successfully"]);
        }

      }
  }

    public function deleteCart(Request $request){
        if(Auth::check()){
          $prod_id=$request->input('productId');
          if(Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->exists()){
            $prod_delete=Cart::where('prod_id',$prod_id)->where('user_id',Auth::id())->first();
            $prod_delete->delete();
            return response()->json(['status'=>"the produc deleted successfully"]);
          }
         
        }
        else{
          return response()->json(['status'=>"Login to continue"]);
        }
    }
    public function cartCount(){
      $cartCount= Cart::where('user_id',Auth::id())->count();
      return response()->json(['count'=>$cartCount]);
    }

   
}
