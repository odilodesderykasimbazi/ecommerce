<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function wishlists(){
        $wish=Wishlist::where('user_id',Auth::id())->get();
        return view('frontend.wishilist',compact('wish'));
    }

    public function addToWish(Request $request){
       
        if(Auth::check()){
            $productId=$request->input('addTowish');
            if(Product::find($productId)){
                $wish=new Wishlist();
                $wish->user_id = Auth::id();
                $wish->prod_id = $productId;
                $wish->save();
                return response()->json(['status' => "product added to wishlist"]);

            }
            else{
                return response()->json(['status'=> "product not added to wishlist"]);
            }
       }
       else{
        return response()->json(['status' => "login to continue with shopping"]);
       }
    }

    public function deleteFromWish(Request $request){
        if(Auth::check()){
            $prodWish = $request->input('wishprod');
            if(Wishlist::where('prod_id',$prodWish)->where('user_id',Auth::id())->exists()){
              $prod_delete=Wishlist::where('prod_id',$prodWish)->where('user_id',Auth::id())->first();
              $prod_delete->delete();
              return response()->json(['status'=>"the produc deleted successfully"]);
            }
           
          }
          else{
            return response()->json(['status'=>"Login to continue"]);
          }

    }

    public function wishCount(){
        $wishCount= Wishlist::where('user_id',Auth::id())->count();
      return response()->json(['count'=>$wishCount]);
    }
}
