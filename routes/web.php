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
Route::get('news/rander/public/save', 'PageController@updateArtisan');
Route::get('lien-he', 'PageController@getMap');
Route::get('gioi-thieu', 'PageController@intro');

Route::group(['prefix' =>'user', 'middleware'=>'Login'], function(){
    Route::get('/logout', 'UserController@logout');
    Route::get('/profile', 'UserController@updateProfile' );
    Route::post('/editprofile/{id}', 'UserController@save');
	Route::get('/changepass', 'UserController@chagepass');
	Route::post('/change-password', 'UserController@savepass');
});


Route::get('ad-guitardn', 'AdminController@dashboard')->name('ad-guitardn')->middleware('Login');
Route::group(['prefix' => 'ad-guitardn', 'middleware'=>'Admin'], function(){
    Route::get('danh-sach-san-pham', 'ProductController@listProduct');
    Route::get('them-san-pham', 'ProductController@getAddProduct');
    Route::post('them-san-pham', 'ProductController@postAddProduct');
    Route::get('sua-san-pham/{id}', 'ProductController@getEditProduct');
    Route::post('sua-san-pham/{id}', 'ProductController@postEditProduct');
    Route::get('xoa-san-pham/{id}', 'ProductController@deleteProduct');

    Route::get('danh-sach-the-loai', 'CategoryController@listCategory');
    Route::get('them-the-loai', 'CategoryController@getAddCategory');
    Route::post('them-the-loai', 'CategoryController@postAddCategory');
    Route::get('sua-the-loai/{id}', 'CategoryController@getEditCategory');
    Route::post('sua-the-loai/{id}', 'CategoryController@postEditCategory');
    Route::get('xoa-the-loai/{id}', 'CategoryController@deleteCategory');

    Route::get('slides', 'SlideController@listSlide');
    Route::get('them-slide', 'SlideController@getAddSlide');
    Route::post('them-slide', 'SlideController@postAddSlide');
    Route::get('sua-slide/{id}', 'SlideController@getEditSlide');
    Route::post('sua-slide/{id}', 'SlideController@postEditSlide');
    Route::get('delete-slide/{id}', 'SlideController@deleteSlide');



    Route::group(['prefix'=>'manage_user'], function(){
    Route::get('/list_user', 'ManageUserController@listUser')->name('manageUser');
    Route::get('/changeroles/{id}','ManageUserController@changeRoles');
    Route::post('/editusers/{id}','ManageUserController@saveRoles');
});
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
