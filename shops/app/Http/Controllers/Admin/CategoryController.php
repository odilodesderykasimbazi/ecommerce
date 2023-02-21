<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\RequestFormCategory;

class CategoryController extends Controller
{
    public function addCategory()
    {
        return view('admin.category.index');
    }
    public function categoryAdd(RequestFormCategory $request){
    $data =$request->validated();
    $category=new Category;     
    $category->categoryname=$data['categoryname'];
    $category->slug=$data['slug'];
    $category->description=$data['description'];
    $category->status=$request->status == true ? '1':'0';
    $category->popula=$request->popular ==true ? '1':'0';
    $category->meta_title=$data['metatitle'];

    //for image
    if($request->hasFile('image'))
    {
     $file=$request->file('image');

     $extension=$file->getClientOriginalExtension();
     $filename=time().'.'.$extension;
     $file->move('uploads/category',$filename);
     $category->image=$filename;
     
    }
    $category->meta_description=$data['metadescription'];
    $category->meta_keyword=$data['metakeywords'];
    $result=$category->save();
    if($result){
        return redirect('/admin-page')->with('success','the category added successfully');
    }
    else{
        return back()->with('failed','somethin went wrong!! data not inserted to the database');
    }
    }
    public function editCategory($category_id)
    {
        $cate=Category::find($category_id);

        return view('admin.category.edit',compact('cate'));
    }
    public function update(RequestFormCategory $request, $category_id)
    {
     $cate=Category::find($category_id);
     $data=$request->validated();
     $cate->categoryname=$data['categoryname'];
     $cate->slug=$data['slug'];
     $cate->description=$data['description'];
     $cate->status=$request->status== true ? '1':'0';
     $cate->popula=$request->popular== true ? '1':'0';
     $cate->meta_title=$data['metatitle'];
     //for image
     if($request->hasfile('image'))
     {
      $path='uploads/category/'.$cate->image;
              if(File::exists($path)){
                File::delete($path);
              }
              $file=$request->file('image');
              $extension=$file->getClientOriginalExtension();
              $filename=time().'.'.$extension;
              $file->move('uploads/category',$filename);
              $cate->image=$filename;
     }
     $cate->meta_description=$data['metadescription'];
     $cate->meta_keyword=$data['metakeywords'];
     $results=$cate->update();
     if($results){
        return redirect('/admin-page')->with('success','The category updated successfully');
     }
     else
     {
        return redirect('/admin-page')->with('failed','failed to update the category');
     }
    }

    public function deleteCategory($category_id)
    {
        $categors=Category::find($category_id);
               
        if($categors->image){
            $path='uploads/category/'.$categors->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $categors->delete();
        return redirect('/admin-page')->with('success','category deleted successfully');
    }
}
