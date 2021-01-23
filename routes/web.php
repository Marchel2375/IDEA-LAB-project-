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

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

//navigation and list
Route::get('/home', 'ProductController@ProductTypes')->name('home');
    // view for product/ProductTypes.blade.php
Route::get('/type/{id}','ProductController@Products');
    //view for product/Products.blade.php

//user update
Route::get('form/user/update','CUDController@UpdateUser')->middleware('auth');
Route::post('form/user/store/update','CUDController@UpdateStoreUser')->middleware('auth');


//create update and delete
Route::middleware(['admin'])->group(function () {
    //type
    Route::get('form/type/create','CUDController@CreateType');
    Route::post('form/type/store/create','CUDController@CreateStoreType');
    Route::get('form/type/update/{id}','CUDController@UpdateType');
    Route::post('form/type/store/update','CUDController@UpdateStoreType');
    Route::post('form/type/delete/store','CUDController@DeleteStoreType');
    //product
    Route::get('form/product/create','CUDController@CreateProduct');
    Route::post('form/product/store/create','CUDController@CreateStoreProduct');
    Route::get('form/product/update/{id}','CUDController@UpdateProduct');
    Route::post('form/product/store/update','CUDController@UpdateStoreProduct');
    Route::post('form/product/delete/store','CUDController@DeleteStoreProduct');
});


//products
Route::get('/product/{id}','ProductController@details');
    //view for product/ProductsDetails.blade.php
Route::post('/product/AddToCart/{id}','ProductController@AddToCart')->name('addtocart')->middleware('user');
Route::post('/product/RemoveFromCart','ProductController@RemoveFromCart')->name('removefromcart')->middleware('user');


//transactions
Route::get('/transaction/cart','TransactionController@cart')->middleware('user');
    //view for transaction/cart.blade.php
Route::post('/transaction/checkout','TransactionController@checkout')->middleware('user');
    //checkout post 
Route::get('/transaction/list','TransactionController@list')->name('transaction list')->middleware('user');
    //view for transaction/list.blade.php



//testing purposes check data and dumps ignore this
Route::get('/admin', function () {
    return view('/test user admin/admin');
})->middleware('admin');;

Route::get('/user', function () {
    return view('/test user admin/user');
})->middleware('user');