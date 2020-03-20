<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('home', function () {
    return view('welcome');
});
Route::post('registerCustom','RegisterController@register')->name('maxRegister');
Route::post('loginCustom','LoginController@login')->name('maxLogin');
Route::post('loginOne','LoginController@loginOne')->name('maxLoginOne');

Route::get('/','IndexController@index')->name('homepage');
Route::get('category','CategoryController@index')->name('category');
Route::get('productDetails/{id}','ProductDetailsController@index');
Route::get('cart','CartController@index');
Route::post('addCart','ProductDetailsController@addCart');
Route::post('cartDelete/{id}','CartController@cartDelete');
Route::post('search','CategoryController@search');

Route::get('checkout','CheckoutController@index');
Route::post('confirm','confirmationRecieptController@placeOrder');
Route::get('myAccount','MyAccountController@index');
//admin routes
//admin routes

Route::get('admin','adminIndexController@index')->name('admin');
Route::post('adminCreate','adminIndexController@create');

Route::get('Seller','VendorIndexController@index')->name('millan');
Route::get('createProduct','CreateProductController@index');
Route::get('createProductAdmin','CreateProductAdminController@index');
Route::get('sellerAvailableOrder','SellerAvailableOrderController@index');
Route::get('adminAvailableOrder/{id}','AdminAvailableOrderController@index');
Route::get('myProduct','MyProductController@index')->name('myProduct');
Route::view('orderSuccess','admin.orderSuccess');
Route::get('orderTable','AdminAvailableOrderController@table');
Route::post('deleteVendorOrder','MyProductController@deleteOrder')->name('deleteVendorOrder');
Route::post('deleteOrder','AdminAvailableOrderController@deleteOrder')->name('deleteOrder');
Route::post('addPicture','frontpagePicturesController@store')->name('savePicture');
Route::post('returnOrder','AdminAvailableOrderController@returnOrder');

Auth::routes();
