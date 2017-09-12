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
//    return view('component');
});

Route::get("test", "ProductController@user");
Route::get("testName", "ProductController@productTest");
Route::get("cat", "ProductController@cat");
Route::get("manyThrough", "ProductController@manyThrough");

