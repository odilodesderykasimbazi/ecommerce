<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\RequestEditData;
use App\Http\Requests\RequestFormProduct;

class ProductController extends Controller
{
    public function index(){

        $category=Category::all();
        return view('admin.product.index',compact('category'));
    }
    public function productAdd(RequestFormProduct $request){
        
        $data=$request->validated();
        $product=new Product;
        //file uploading;
       
              //Then get the validated date from the authorization file(RequestFormProduct);
                
              $product->cate_id=$data['cate_id'];
              $product->product_name=$data['productname'];
              $product->slug=$data['slug'];
              $product->small_description=$data['smalldescription'];
              $product->description=$data['description'];
              $product->original_price=$data['originalprice'];
              $product->selling_price=$data['sellingprice'];
              //for the image;
              if($request->hasFile('image')){
                $file=$request->file('image');
                $ext=$file->getClientOriginalExtension();
                $filename=time().'.'.$ext;
                $file->move('uploads/products',$filename);
                $product->image=$filename;
            }
              $product->quantity=$data['quantity'];
              $product->tax=$data['tax'];
              $product->status=$request->status== true ? '1':'0';
              $product->trending=$request->trending== true ? '1':'0';
              $product->meta_title=$data['metatitle'];
              $product->meta_keywords=$data['metakeyword'];
              $product->meta_description=$data['metadescription'];
              $result=$product->save();
              if($result){
                return redirect('/view-product')->with('success','the product added successfully');
              }
              else{
                return redirect('/view-product')->with('success','the product not added');
          }
    }

    public function viewProduct()
    {
      $prod=Product::all();
      
      return view('admin.product.viewProduct',compact('prod'));
    }

    public function editProduct($product_id){
      
      $product=Product::find($product_id);
      $category=Category::all();
      return view('admin.product.edit',compact('product','category'));
    }

    public function updateProduct(RequestFormProduct $request, $product_id)
    {
           $products=Product::find($product_id);
           $data=$request->validated();
            $products->cate_id=$data['cate_id'];
            $products->product_name=$data['productname'];
            $products->slug=$data['slug'];
            $products->small_description=$data['smalldescription'];
            $products->description=$data['description'];
            $products->original_price=$data['originalprice'];
            $products->selling_price=$data['sellingprice'];
           //for images 
           if($request->hasfile('image')){
            $path='uploads/products/'.$products->image;
            if(File::exists($path)){
              File::delete($path);
            }
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/products/',$filename);
            $products->image=$filename;
           }
           //$product->image=$data['image'];
            $products->quantity=$data['quantity'];
            $products->tax=$data['tax'];
            $products->status = $request->status == true ? '1':'0';
            $products->trending = $request->trending == true ? '1':'0';
            $products->meta_title=$data['metatitle'];
            $products->meta_keywords=$data['metakeyword'];
            $products->meta_description=$data['metadescription'];
              $results=$products->update();
              if($results){
                return redirect('/view-product')->with('success','The product updated successfull');
              }
              else 
              {
                return redirect('/view-product')->with('success','The product not updated');
              }
    }
    public function deleteProduct($product_id){
      $product1=Product::find($product_id);
      if($product1->image)
      {
        $path='uploads/products/'.$product1->image;
        if(File::exists($path)){
          File::delete($path);
        }
       
      }
      $product1->delete();
     return redirect('/view-product')->with('success','The product deleted successifully');
    }
     
}
