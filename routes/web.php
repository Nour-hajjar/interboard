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

Auth::routes();

Route::get('/', 'WebsiteController@index')->name('index');
Route::get('information', 'WebsiteController@information')->name('information');
Route::get('lang/{lang}', 'LocalizationController@index');

Route::get('get_image/{url}',"WebsiteController@get_image")->name("getImage");
Route::get('/search', 'InfoController@search');
Route::get('category/{slug}', 'WebsiteController@category')->name('category');
Route::get('post/{slug}', 'WebsiteController@post')->name('post');
Route::get('contact', 'WebsiteController@showContactForm')->name('contact.show');
Route::post('contact', 'WebsiteController@submitContactForm')->name('contact.submit');

Route::get('about','WebsiteController@aboutt');






Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

      Route::resource('infos', 'InfoController');
    Route::resource('galleries', 'GalleryController');
    Route::resource('abouts', 'AboutController');
     Route::resource('posts', 'PostController');
      Route::resource('categories', 'CategoryController');
    
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
