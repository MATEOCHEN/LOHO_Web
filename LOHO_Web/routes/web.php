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

Route::group(['middleware' => 'AdminLogin'], function () {
    Route::get(
        '/',
        array('uses' => 'HomeController@Index', 'as' => 'Index')
    );
    Route::get(
        '/Layout',
        array('uses' => 'HomeController@Layout', 'as' => 'Layout')
    );
});


Route::get('/getAll','BoardController@getAll');

Route::get('/getChinese','BoardController@getChinese');
//Route::get('/info','HomeController@info');

//Route::get('Shopping/BrowseItems','Shopping\ShoppingController@BrowseItems');

//Route::get('Shopping/ShoppingItem','Shopping\ShoppingController@ShoppingItem');
/*
Route::group(['prefix'=>'Shopping'],function(){
    Route::get('BrowseItems','Shopping\ShoppingController@BrowseItems');
    Route::get('ShoppingItem','Shopping\ShoppingController@ShoppingItem');
});*/

Route::group(['prefix' => 'Shopping'], function () {
    Route::get(
        'BrowseItems',
        array('uses' => 'Shopping\ShoppingController@BrowseItems', 'as' => 'BrowseItems')
    );
    Route::get(
        'ShoppingItem',
        array('uses' => 'Shopping\ShoppingController@ShoppingItem', 'as' => 'ShoppingItem')
    );
});

Route::group(['namespace' => 'Account','prefix' => 'Account'], function () {
    Route::get(
        'Account_Log_In',
        array('uses' => 'AccountController@Account_Log_In', 'as' => 'Account_Log_In')
    );

    Route::get(
        'ForgetPassword',
        array('uses' => 'AccountController@ForgetPassword', 'as' => 'ForgetPassword')
    );

    Route::get(
        'RegisterAccount',
        array('uses' => 'AccountController@RegisterAccount', 'as' => 'RegisterAccount')
    );

    Route::get(
        'AccountInformation',
        array('uses' => 'AccountController@AccountInformation', 'as' => 'AccountInformation')
    );

    Route::post(
        'AfterAccount_Log_In',
        array('uses' => 'AccountController@AfterAccount_Log_In', 'as' => 'AfterAccount_Log_In')
    );

    Route::post(
        'AfterRegisterAccount',
        array('uses' => 'AccountController@AfterRegisterAccount', 'as' => 'AfterRegisterAccount')
    );
    
});







/*
Route::get('/student/{student_no}', function ($student_no) {
    return "學號:" . $student_no;
});*/
