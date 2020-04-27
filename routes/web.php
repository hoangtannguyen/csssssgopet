<?php

use App\Http\Controllers\CartController;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
//backen


// Route::get('admin','AdminController@admin');
// Route::get('show_dashboard','AdminController@show_dashboard');
Route::get('admin','AdminController@dashboard')->name('dashboard');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Auth::routes();



//fronend

// Route::get('bf', function () {
//     return view("home.addcart");
// });





Route::get('/', 'HomeController@index')->name('home');
Route::get('loaisp/{type}' , 'HomeController@loaisp')->name('loaisp');
Route::get('ctsp/{id}' , 'HomeController@chitietsp')->name('ctsp');
Route::get('/search' , 'HomeController@search')->name('search');
Route::get('/blog' , 'HomeController@skill')->name('skill');
Route::get('blog/{id}' , 'HomeController@skillct')->name('skillct');
Route::get('contact' , 'HomeController@contact')->name('contact');
Route::get('loaipk/{acce}' , 'HomeController@loaipk')->name('loaipk');
Route::post('dathang','HomeController@dathang')->name('dathang');



Route::get('/send-mail','CartController@send_mail');

Route::post('/store' ,'CartController@store')->name('cart.store');

Route::prefix('admin')->group(function(){

    Route::resource('product','ProductController');
    // Route::get('product' , 'ProductController@index')->name('product.index');
    // Route::get('create3' , 'ProductController@create')->name('product.create');
    // Route::post('store3' , 'ProductController@store')->name('product.store');
    // Route::get('{id}/edit3' , 'ProductController@edit')->name('product.edit');
    // Route::put('{id}/update3' , 'ProductController@update')->name('product.update');
    // Route::delete('{id}/delete3', 'ProductController@destroy')->name('product.destroy');
    Route::get('/search3' , 'ProductController@search')->name('productsearch');
    // Route::get('{id}/show3' , 'ProductController@show')->name('product.show');
    Route::get('unactive/{id}' , 'ProductController@unactive')->name('unactive');
     Route::get('active/{id}' , 'ProductController@active')->name('active');

    Route::get('/product_trash', 'ProductController@trash')->name('product.trash');
    Route::get('/product_restore/{id}', 'ProductController@restore')->name('product.restore');
    Route::get('/product_restoreAll', 'ProductController@restoreAll')->name('product.restoreAll');
    Route::get('/product_deleteAll', 'ProductController@deleteAll')->name('product.deleteAll');



    Route::resource('customer','CustomerController');

    Route::resource('bill','BillController');

    Route::resource('billd','BilldeController');

    Route::resource('category', 'CategoryController');

    Route::resource('type', 'TypeController');

    Route::resource('a', 'Acontroller');

    Route::resource('skill', 'SkillController');
















    Route::get('index' , 'ItemController@index')->name('item.index');
    Route::get('create' , 'ItemController@create')->name('item.create');
    Route::post('store' , 'ItemController@store')->name('item.store');
    Route::get('{id}/edit' , 'ItemController@edit')->name('item.edit');
    Route::put('{id}/update' , 'ItemController@update')->name('item.update');
    Route::delete('{id}/delete', 'ItemController@destroy')->name('item.destroy');
    Route::get('/search' , 'ItemController@search')->name('item.search');
    Route::get('{id}/show' , 'ItemController@show')->name('item.show');


    Route::get('index1' , 'AcceController@index')->name('acce.index');
    Route::get('create1' , 'AcceController@create')->name('acce.create');
    Route::post('store1' , 'AcceController@store')->name('acce.store');
    Route::get('{id}/show1' , 'AcceController@show')->name('acce.show');
    Route::get('{id}/edit1' , 'AcceController@edit')->name('acce.edit');
    Route::put('{id}/update1' , 'AcceController@update')->name('acce.update');
    Route::delete('{id}/delete1', 'AcceController@destroy')->name('acce.destroy');
    Route::get('/search1' , 'AcceController@search')->name('acce.search');


    Route::get('index2' , 'StaffController@index')->name('staff.index');
    Route::get('create2' , 'StaffController@create')->name('staff.create');
    Route::post('store2' , 'StaffController@store')->name('staff.store');
    Route::get('{id}/show2' , 'StaffController@show')->name('staff.show');
    Route::get('{id}/edit2' , 'StaffController@edit')->name('staff.edit');
    Route::put('{id}/update2' , 'StaffController@update')->name('staff.update');
    Route::delete('{id}/delete2', 'StaffController@destroy')->name('staff.destroy');
    Route::get('/search2' , )->name('staff.search');




Route::post('/cart-add', 'CartController@add')->name('cart.add');
Route::get('/cart-checkout', 'CartController@cart')->name('cart.checkout');
Route::get('/cart', 'CartController@addcart')->name('cart');
Route::post('/cart-clear', 'CartController@clear')->name('cart.clear');

Route::post('/cart/update' ,'CartController@update')->name('cart.update');

Route::post('remove/{id}', 'CartController@remove')->name('remove');


});






