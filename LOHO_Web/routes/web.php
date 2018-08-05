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

    Route::get(
        '/TestDB',
        array('uses' => 'HomeController@TestDB', 'as' => 'TestDB')
    );

    Route::get(
        'Account/AccountInformation',
        array('uses' => 'Account\AccountController@AccountInformation', 'as' => 'AccountInformation')
    );

    Route::get(
        'Account/PersonalInformation',
        array('uses' => 'Account\AccountController@PersonalInformation', 'as' => 'AccountInformation')
    );
});

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

    Route::post(
        'AfterForgetPassword',
        array('uses' => 'AccountController@AfterForgetPassword', 'as' => 'AfterForgetPassword')
    );

    
    Route::get(
        'ForgetPasswordToModify',
        array('uses' => 'AccountController@ForgetPasswordToModify', 'as' => 'ForgetPasswordToModify')
    );

    Route::get(
        'RegisterAccount',
        array('uses' => 'AccountController@RegisterAccount', 'as' => 'RegisterAccount')
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
