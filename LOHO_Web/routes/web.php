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

});

Route::group(['namespace' => 'Admin','prefix' => 'admin'], function () {
    Route::get(
        '/index',
        array('uses' => 'AdminIndexController@AdminIndex', 'as' => 'admin')
    );

    Route::get(
        '/ManageItems',
        array('uses' => 'ManageItemsController@ManageItems', 'as' => 'ManageItems')
    );
    
    Route::get(
        '/getItems',
        array('uses' => 'QueryItemsController@getItems', 'as' => 'getItems')
    );

    Route::post(
        '/upload',
        array('uses' => 'UpdateItemsController@upLoadFile', 'as' => 'upLoadFile')
    );

    Route::post(
        '/modifyDB',
        array('uses' => 'UpdateItemsController@modifyDB', 'as' => 'modifyDB')
    );

    Route::post(
        '/addItemsToDatabase',
        array('uses' => 'AddItemsController@addItemsToDatabase', 'as' => 'addItemsToDatabase')
    );

    Route::post(
        '/deleteItemsFromDatabase',
        array('uses' => 'DeleteItemsController@deleteItemsFromDatabase', 'as' => 'deleteItemsFromDatabase')
    );

});

Route::group(['middleware' => 'AdminLogin','namespace' => 'Account\GET','prefix' => 'Account'], function () {
    Route::get(
        'AccountInformation',
        array('uses' => 'AccountInfoController@AccountInformation', 'as' => 'AccountInformation')
    );

    Route::get(
        'PersonalInformation',
        array('uses' => 'AccountInfoController@PersonalInformation', 'as' => 'PersonalInformation')
    );


    Route::get(
        'ModifyPassword',
        array('uses' => 'ForgetPasswordController@ModifyPassword', 'as' => 'ModifyPassword')
    );

    Route::get(
        '/Logout',
        array('uses' => 'LogoutAccountController@Logout', 'as' => 'Logout')
    );
});

Route::group(['namespace' => 'Account\GET','prefix' => 'Account'], function () {
    Route::get(
        'Account_Log_In',
        array('uses' => 'LoginAccountController@Account_Log_In', 'as' => 'Account_Log_In')
    );

    Route::get(
        'ForgetPassword',
        array('uses' => 'ForgetPasswordController@ForgetPassword', 'as' => 'ForgetPassword')
    );
    Route::get(
        'ForgetPasswordToModify',
        array('uses' => 'ForgetPasswordController@ForgetPasswordToModify', 'as' => 'ForgetPasswordToModify')
    );

    Route::get(
        'RegisterAccount',
        array('uses' => 'RegisterAccountController@RegisterAccount', 'as' => 'RegisterAccount')
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
        'RecommendationItems',
        array('uses' => 'Shopping\ShoppingController@RecommendationItems', 'as' => 'RecommendationItems')
    );

    Route::get(
        'ShoppingItem',
        array('uses' => 'Shopping\ShoppingController@ShoppingItem', 'as' => 'ShoppingItem')
    );

    Route::post(
        'addCart',
        array('uses' => 'Shopping\ShoppingController@addCart', 'as' => 'addCart')
    );

    Route::post(
        '/updateCart',
        array('uses' => 'Shopping\ShoppingController@updateCart', 'as' => 'updateCart')
    );

    Route::get(
        'getCart',
        array('uses' => 'Shopping\ShoppingController@getCart', 'as' => 'getCart')
    );

    Route::post(
        '/deleteCart',
        array('uses' => 'Shopping\ShoppingController@deleteCart', 'as' => 'deleteCart')
    );

    Route::get(
        '/ShoppingCart',
        array('uses' => 'Shopping\ShoppingController@ShoppingCart', 'as' => 'ShoppingCart')
    );

});
