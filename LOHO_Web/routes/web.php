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

Route::group(['middleware' => 'AdminLogin','namespace' => 'Account\GET','prefix' => 'Account'], function () {
    Route::get(
        'AccountInformation',
        array('uses' => 'AccountControllerGetAbstraction@AccountInformation', 'as' => 'AccountInformation')
    );

    Route::get(
        'PersonalInformation',
        array('uses' => 'AccountControllerGetAbstraction@PersonalInformation', 'as' => 'PersonalInformation')
    );


    Route::get(
        'ModifyPassword',
        array('uses' => 'AccountControllerGetAbstraction@ModifyPassword', 'as' => 'ModifyPassword')
    );

    Route::get(
        '/Logout',
        array('uses' => 'AccountControllerGetAbstraction@Logout', 'as' => 'Logout')
    );
});

Route::group(['namespace' => 'Account\GET','prefix' => 'Account'], function () {
    Route::get(
        'Account_Log_In',
        array('uses' => 'AccountControllerGetAbstraction@Account_Log_In', 'as' => 'Account_Log_In')
    );

    Route::get(
        'ForgetPassword',
        array('uses' => 'AccountControllerGetAbstraction@ForgetPassword', 'as' => 'ForgetPassword')
    );
    Route::get(
        'ForgetPasswordToModify',
        array('uses' => 'AccountControllerGetAbstraction@ForgetPasswordToModify', 'as' => 'ForgetPasswordToModify')
    );

    Route::get(
        'RegisterAccount',
        array('uses' => 'AccountControllerGetAbstraction@RegisterAccount', 'as' => 'RegisterAccount')
    );

});

Route::group(['namespace' => 'Account\POST','prefix' => 'Account'], function () {


    Route::post(
        'AfterForgetPassword',
        array('uses' => 'AccountControllerPostAbstraction@AfterForgetPassword', 'as' => 'AfterForgetPassword')
    );


    Route::post(
        'AfterAccount_Log_In',
        array('uses' => 'AccountControllerPostAbstraction@AfterAccount_Log_In', 'as' => 'AfterAccount_Log_In')
    );

    Route::post(
        'AfterRegisterAccount',
        array('uses' => 'AccountControllerPostAbstraction@AfterRegisterAccount', 'as' => 'AfterRegisterAccount')
    );
    
    Route::post(
        'EmailVerification',
        array('uses' => 'AccountControllerPostAbstraction@EmailVerification', 'as' => 'EmailVerification')
    );

    Route::post(
        'SendModifyPassword',
        array('uses' => 'AccountControllerPostAbstraction@SendModifyPassword', 'as' => 'SendModifyPassword')
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

    Route::post(
        'addCart',
        array('uses' => 'Shopping\ShoppingController@addCart', 'as' => 'addCart')
    );
});
