<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
   public function index(){

      $category=Category::all();
    return view ('admin.dashboard',compact('category'));
   }

   public function viewUsers(){
      return 'This is for viewing users';
   }
}
