<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::auth();
Route::get('/', 'HomeController@index');
Route::get('/product/{slug_category}/{slug_product}', 'HomeController@detailproduct');
Route::post('/addcart', 'HomeController@addcart');
Route::get('/s', 'HomeController@ceksession');
Route::get('/ds', 'HomeController@delsession');
Route::group(['middleware' => 'member'], function(){
});