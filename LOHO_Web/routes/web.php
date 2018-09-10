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

Route::group(['middleware' => 'AdminLogin','namespace' => 'Account','prefix' => 'Account'], function () {
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

    Route::post(
        'SendModifyPassword',
        array('uses' => 'ForgetPasswordController@SendModifyPassword', 'as' => 'SendModifyPassword')
    );

    Route::get(
        '/Logout',
        array('uses' => 'LogoutAccountController@Logout', 'as' => 'Logout')
    );
});

Route::group(['namespace' => 'Account','prefix' => 'Account'], function () {
    Route::get(
        'Account_Log_In',
        array('uses' => 'LoginAccountController@Account_Log_In', 'as' => 'Account_Log_In')
    );

    Route::post(
        'AfterAccount_Log_In',
        array('uses' => 'LoginAccountController@AfterAccount_Log_In', 'as' => 'AfterAccount_Log_In')
    );

    Route::get(
        'ForgetPassword',
        array('uses' => 'ForgetPasswordController@ForgetPassword', 'as' => 'ForgetPassword')
    );

    Route::post(
        'AfterForgetPassword',
        array('uses' => 'ForgetPasswordController@AfterForgetPassword', 'as' => 'AfterForgetPassword')
    );

    Route::get(
        'ForgetPasswordToModify',
        array('uses' => 'ForgetPasswordController@ForgetPasswordToModify', 'as' => 'ForgetPasswordToModify')
    );

    Route::get(
        'RegisterAccount',
        array('uses' => 'RegisterAccountController@RegisterAccount', 'as' => 'RegisterAccount')
    );

    Route::post(
        'AfterRegisterAccount',
        array('uses' => 'RegisterAccountController@AfterRegisterAccount', 'as' => 'AfterRegisterAccount')
    );

    Route::post(
        'EmailVerification',
        array('uses' => 'ForgetPasswordController@EmailVerification', 'as' => 'EmailVerification')
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
        array('uses' => 'Shopping\CartController@addCart', 'as' => 'addCart')
    );

    Route::post(
        '/updateCart',
        array('uses' => 'Shopping\CartController@updateCart', 'as' => 'updateCart')
    );

    Route::get(
        'getCart',
        array('uses' => 'Shopping\CartController@getCart', 'as' => 'getCart')
    );

    Route::post(
        '/deleteCart',
        array('uses' => 'Shopping\CartController@deleteCart', 'as' => 'deleteCart')
    );

    Route::get(
        '/ShoppingCart',
        array('uses' => 'Shopping\CartController@ShoppingCart', 'as' => 'ShoppingCart')
    );

    Route::get(
        '/CheckoutList',
        array('uses' => 'Shopping\ShoppingController@CheckoutList', 'as' => 'CheckoutList')
    );

    Route::get(
        '/ConfirmShoppingList',
        array('uses' => 'Shopping\ShoppingController@ConfirmShoppingList', 'as' => 'ConfirmShoppingList')
    );

    Route::get(
        '/FillOrderList',
        array('uses' => 'Shopping\ShoppingController@FillOrderList', 'as' => 'FillOrderList')
    );
});
