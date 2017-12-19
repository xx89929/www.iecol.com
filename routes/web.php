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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::group(['namespace' => 'Home'],function(){
    Route::get('','IndexController@index')->name('/');
    Route::get('about','AboutController@index')->name('about');
    Route::get('product','ProductController@index')->name('product');
    Route::get('contact','ContactController@index')->name('contact');
    Route::get('project','ProjectController@index')->name('project');
    Route::get('product/search','ProductController@search_proudct')->name('product_search');


    Route::get('nav_pro_class','IndexController@nav_pro_class')->name('nav_pro_class');
});



Route::group(['namespace' => 'Auth'],function(){
    Route::get('login','LoginController@showLoginForm')->name('login');
    Route::post('login','LoginController@login')->name('login');
    Route::get('register','RegisterController@showRegistrationForm')->name('register');
    Route::post('register','RegisterController@register')->name('register');
});


Route::group(['prefix' => 'admin','namespace' => 'Admin'], function () {
    Route::get('index','IndexController@index')->name('admin');
    Route::get('logout','IndexController@logout')->name('logout');

    /****product****/
    Route::get('product','ProductController@index')->name('admin_product');
    Route::get('product/get_product','ProductController@get_product')->name('get_product');
    Route::match(['post','get'],'product/create','ProductController@create')->name('product_create');
    Route::match(['post','get'],'product/update/{id?}','ProductController@update')->name('product_update');
    Route::get('product/del/{id?}','ProductController@del')->name('product_del');
    Route::match(['post','get'],'product/put_files','ProductController@put_files')->name('put_files');


    /****product class****/
    Route::get('product/classify','ProClassifyController@index')->name('pro_class');
    Route::get('product/get_product_class','ProClassifyController@get_pro_class')->name('get_product_class');
    Route::match(['post','get'],'product/classify/create','ProClassifyController@create')->name('product_classify_create');
    Route::match(['post','get'],'product/classify/update/{id?}','ProClassifyController@update')->name('product_classify_update');
    Route::get('product/classify/del/{id?}','ProClassifyController@del')->name('product_classify_del');
});