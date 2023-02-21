<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Frontend\CheckOutController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\WishlistController;









/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
   // return view('welcome');
//});

Route::get('/',[FrontendController::class,'front']);
Route::get('featuredProduct',[FrontendController::class,'category']);
Route::get('/viewCategories/{slug}',[FrontendController::class,'viewCategory']);
Route::get('/viewCategories/{cate_slug}/{prod_slug}',[FrontendController::class,'productview']);

Route::post('add-to-cart',[CartController::class,'addToCartdata']); //adding data to the cart
Route::post('add-to-wishlist',[WishlistController::class,'addToWish']);//adding data to whishlist

Route::post('delete_cart_item',[CartController::class,'deleteCart']);
Route::post('delete_wishItem',[WishlistController::class,'deleteFromWish']);
Route::post('updataCart',[CartController::class,'cartUpdate']);
Route::get('load-cart-data',[CartController::class,'cartCount']);
Route::get('load-wishlist-data',[WishlistController::class,'wishCount']);

Route::middleware(['auth'])->group(function(){
Route::get('cart',[CartController::class,'viewcart']);

Route::get('checkout',[CheckOutController::class,'index']);
Route::post('place-order',[CheckOutController::class,'placeorder']); //for placing the Order
Route::post('proceed-to-pay',[CheckOutController::class,'procedToPay']);

Route::get('my-orders',[UserController::class,'myOrders']);

Route::get('view-orders/{id}',[UserController::class,'ViewOrders']);
Route::get('wishlist',[WishlistController::class,'wishlists']);
});
Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware'=>['auth','isAdmin']], function()
{
    Route::get('/admin-page',[AdminController::class,'index']);
     Route::get('/add-category',[CategoryController::class,'addCategory']);
     Route::post('/addCate',[CategoryController::class,'categoryAdd']);
     Route::get('/editCategory/{category_id}',[CategoryController::class,'editCategory']);
     Route::put('/update-category/{category_id}',[CategoryController::class,'update']);
     Route::get('/deleteCategory/{category_id}',[CategoryController::class,'deleteCategory']);
     Route::get('/product',[ProductController::class,'index']);
     Route::post('/addProduct',[ProductController::class,'productAdd']);
     Route::get('/view-product',[ProductController::class,'viewProduct']);
     Route::get('/editProduct/{product_id}',[ProductController::class,'editProduct']);
     Route::put('/update-product/{product_id}',[ProductController::class,'updateProduct']);
     Route::get('/deleteProduct/{product_id}',[ProductController::class,'deleteProduct']);

     Route::get('/users',[AdminController::class,'viewUsers']);
     Route::get('/orders',[OrderController::class,'viewOrders']);
     Route::get('/admin/view-orders/{id}',[OrderController::class,'admiViewOrders']);
     Route::put('/update-order/{id}',[OrderController::class,'updateOrder']);
     Route::get('order-history',[OrderController::class,'orderHistory']);


     
});

