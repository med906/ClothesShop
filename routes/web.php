<?php

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

//Route::get('/', function () {
//    return view('index');
//});
//Route::get('/products', function () {
//    return view('Products');
//});
//
//Route::get('/productDetails', function () {
//    return view('ProductDetails');
//});
//
//Route::get('/cart',function (){
//   return view('Cart');
//});
//
//Route::get('/account',function (){
//   return view('Account');
//});

Route::get('/',\App\Http\Livewire\HomeComponent::class)->name('home');
Route::get('/products',\App\Http\Livewire\ProductsComponent::class)->name('products');
Route::get('/aboutUs',\App\Http\Livewire\AboutUsComponent::class)->name('aboutus');
Route::get('/cart',\App\Http\Livewire\CartComponent::class)->name('cart');
Route::get('/account',\App\Http\Livewire\AccountComponent::class)->name('account');

Route::get('/item',\App\Http\Livewire\ItemComponent::class)->name('item');
