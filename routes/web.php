<?php

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

Route::get('/', 'PageController@getIndex');
Route::get('san-pham', 'PageController@getProduct');
Route::get('danh-muc/{alias}', 'PageController@getCategory');
Route::get('san-pham/{alias}', 'PageController@getDetail');
Route::get('timkiem-sp', 'PageController@searchsp');

Route::get('ad-guitardn', 'AdminController@dashboard');

Route::get('ad-guitardn/danh-sach-san-pham', 'ProductController@listProduct');
Route::get('ad-guitardn/them-san-pham', 'ProductController@getAddProduct');
Route::post('ad-guitardn/them-san-pham', 'ProductController@postAddProduct');
Route::get('ad-guitardn/sua-san-pham/{id}', 'ProductController@getEditProduct');
Route::post('ad-guitardn/sua-san-pham/{id}', 'ProductController@postEditProduct');
Route::get('ad-guitardn/xoa-san-pham/{id}', 'ProductController@deleteProduct');

Route::get('ad-guitardn/danh-sach-the-loai', 'CategoryController@listCategory');
Route::get('ad-guitardn/them-the-loai', 'CategoryController@getAddCategory');
Route::post('ad-guitardn/them-the-loai', 'CategoryController@postAddCategory');
Route::get('ad-guitardn/sua-the-loai/{id}', 'CategoryController@getEditCategory');
Route::post('ad-guitardn/sua-the-loai/{id}', 'CategoryController@postEditCategory');
Route::get('ad-guitardn/xoa-the-loai/{id}', 'CategoryController@deleteCategory');
