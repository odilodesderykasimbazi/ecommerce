<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function front(){

        $featured_product=Product::where('trending','1')->take(15)->get();
        $categories=Category::where('popula','1')->take(15)->get();
        return view('frontend.index',compact('featured_product','categories'));
    }

    public function category(){
        $category=Category::where('status','0')->get();
        return view('frontend.category',compact('category'));
        
    }

    public function viewCategory($slug){
        if(Category::where('slug',$slug)->exists()){
            $cate=Category::where('slug',$slug)->first();
            $product=Product::where('cate_id',$cate->id)->where('status','0')->get();

            return view('frontend.product.index',compact('cate','product'));
        }
        else{
            return redirect('/')->with('success','Slug doesnot exist');
        }
    }

    public function productview($cate_slug,$prod_slug){
           

        if(Category::where('slug',$cate_slug)->exists()){



            if(Product::where('slug',$prod_slug)->exists()){
                 $produc=Product::where('slug',$prod_slug)->first();
                 return view('frontend.product.prodview',compact('produc'));
            }
            else{
                return redirect('/')->with('success','no such product');
            }
        }
        else{
            return redirect('/')->with('success','The link was brocken');
        }
        
    }
}
