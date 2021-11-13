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

Route::get('/', function () {
    return view('welcome');
});
Route::match(['get', 'post'],'/login', 'AdminController@login');
Auth::routes();
Route::group(['middleware' => ['auth']], function() {
    //Route::get('/home', 'HomeController@index')->name('home');


    Route::match(['get', 'post'],'/Product', 'AdminController@product');


    Route::Post('/saveProduct', 'AdminController@saveProduct');


    Route::get('/logout','AdminController@logout');


});



