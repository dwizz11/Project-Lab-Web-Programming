<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\ajaxcontroller;
use App\Http\Controllers\cartcontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Logoutcontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\products;
use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [homecontroller::class, 'index']);
Route::get('/home/{category:category_slug}', [homecontroller::class, 'showCategory']);
Route::get('/home/{category}/{product:productslug}', [productcontroller::class, 'showProduct'])->name('category.product');
Route::post('/home/buy', [cartcontroller::class, 'addtoCart'])->middleware('auth')->middleware('useronly');


Route::get('/cart', [cartcontroller::class, 'showCart'])->middleware('auth')->middleware('useronly');
Route::delete('/cart/delete/{cart_id}/{product_id}', [cartcontroller::class, 'destroycartitems']);
Route::post('/cart/purchase', [cartcontroller::class, 'purchasecartitems'])->middleware('auth')->middleware('useronly');
Route::get('/checkcart', [cartcontroller::class, 'checkCart'])->middleware('auth')->middleware('useronly');
Route::get('/search', [ajaxcontroller::class, 'searchproduct']);
Route::get('/manage/search', [ajaxcontroller::class, 'managesearchproduct'])->middleware('auth')->middleware('admin');
// Route::get('/profile', [homecontroller::class, 'showCart'])->middleware('auth');



Route::get('/login', [Logincontroller::class , 'index'])->name('login')->middleware('guest');
Route::post('/login', [Logincontroller::class , 'authenticate']);
Route::post('/logout', [Logoutcontroller::class , 'logout'])->middleware('auth');


Route::get('/register', [Registercontroller::class , 'index'])->middleware('guest');
Route::post('/register', [Registercontroller::class , 'verify']);


Route::get('/profile', [usercontroller::class , 'index'])->middleware('auth');
Route::get('/checkhistory', [homecontroller::class , 'checkHistory'])->middleware('auth')->middleware('useronly');
Route::get('/history', [homecontroller::class , 'showHistory'])->middleware('auth')->middleware('useronly');



Route::get('/manage', [admincontroller::class, 'index'])->middleware('auth')->middleware('admin');
Route::get('/manage/add', [admincontroller::class, 'addproduct'])->middleware('auth')->middleware('admin');
Route::get('/manage/update/{product:productslug}', [admincontroller::class, 'editproduct'])->middleware('auth')->middleware('admin');
Route::put('/manage/update/{product:productslug}', [productcontroller::class, 'updateproduct'])->middleware('auth')->middleware('admin');
Route::delete('/manage/delete/{product:productslug}', [productcontroller::class, 'destroyproduct'])->middleware('auth')->middleware('admin');
Route::post('/manage/add', [productcontroller::class, 'storeproduct'])->middleware('auth')->middleware('admin');
