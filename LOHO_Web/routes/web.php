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

Route::group([], function () {
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
});

Route::group(['middleware' => 'AdminLogin','namespace' => 'Account','prefix' => 'Account'], function () {
    Route::get(
        'AccountInformation',
        array('uses' => 'AccountControllerAbstraction@AccountInformation', 'as' => 'AccountInformation')
    );

    Route::get(
        'PersonalInformation',
        array('uses' => 'AccountControllerAbstraction@PersonalInformation', 'as' => 'PersonalInformation')
    );


    Route::get(
        'ModifyPassword',
        array('uses' => 'AccountControllerAbstraction@ModifyPassword', 'as' => 'ModifyPassword')
    );
});

Route::group(['namespace' => 'Account','prefix' => 'Account'], function () {
    Route::get(
        'Account_Log_In',
        array('uses' => 'AccountControllerAbstraction@Account_Log_In', 'as' => 'Account_Log_In')
    );

    Route::get(
        'ForgetPassword',
        array('uses' => 'AccountControllerAbstraction@ForgetPassword', 'as' => 'ForgetPassword')
    );
    Route::get(
        'ForgetPasswordToModify',
        array('uses' => 'AccountControllerAbstraction@ForgetPasswordToModify', 'as' => 'ForgetPasswordToModify')
    );

    Route::get(
        'RegisterAccount',
        array('uses' => 'AccountControllerAbstraction@RegisterAccount', 'as' => 'RegisterAccount')
    );

});

Route::group(['namespace' => 'Account','prefix' => 'Account'], function () {


    Route::post(
        'AfterForgetPassword',
        array('uses' => 'AccountControllerAbstraction@AfterForgetPassword', 'as' => 'AfterForgetPassword')
    );


    Route::post(
        'AfterAccount_Log_In',
        array('uses' => 'AccountControllerAbstraction@AfterAccount_Log_In', 'as' => 'AfterAccount_Log_In')
    );

    Route::post(
        'AfterRegisterAccount',
        array('uses' => 'AccountControllerAbstraction@AfterRegisterAccount', 'as' => 'AfterRegisterAccount')
    );
    
    Route::post(
        'EmailVerification',
        array('uses' => 'AccountConAccountControllerAbstractiontroller@EmailVerification', 'as' => 'EmailVerification')
    );

    Route::post(
        'SendModifyPassword',
        array('uses' => 'AccountControllerAbstraction@SendModifyPassword', 'as' => 'SendModifyPassword')
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
