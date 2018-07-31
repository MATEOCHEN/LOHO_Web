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

Route::get('/','HomeController@Index');

//Route::get('/info','HomeController@info');

Route::get('Shopping/BrowseItems','Shopping\ShoppingController@BrowseItems');

Route::get('Shopping/ShoppingItem','Shopping\ShoppingController@ShoppingItem');

Route::get('/student/{student_no}', function ($student_no) {
    return "學號:".$student_no;
});
