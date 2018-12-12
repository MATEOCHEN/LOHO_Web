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
        '/GetUserData',
        array('uses' => 'HomeController@GetUserData', 'as' => 'GetUserData')
    );

});

Route::group(['namespace' => 'Admin','prefix' => 'admin'], function () {

    Route::get(
        '/index',
        array('uses' => 'AdminIndexController@AdminIndex', 'as' => 'admin')
    );

});

Route::group(['prefix'=>'About'], function() {
    Route::get(
        '/loho_history',
        array('uses' => 'About\AboutController@History', 'as' => 'loho_history')
    );

    Route::get(
        '/loho_location',
        array('uses' => 'About\AboutController@Location', 'as' => 'loho_location')
    );

    Route::get(
        '/loho_tour',
        array('uses' => 'About\AboutController@Tour', 'as' => 'loho_tour')
    );

    Route::get(
        '/loho_glory',
        array('uses' => 'About\AboutController@Glory', 'as' => 'loho_glory')
    );

    Route::get(
        '/loho_award',
        array('uses' => 'About\AboutController@Award', 'as' => 'loho_award')
    );

    Route::get(
        '/loho_apperance',
        array('uses' => 'About\AboutController@Apperance', 'as' => 'loho_apperance')
    );

    Route::get(
        '/loho_magazine',
        array('uses' => 'About\AboutController@Magazine', 'as' => 'loho_magazine2')
    );

    Route::get(
        '/loho_video',
        array('uses' => 'About\AboutController@Video', 'as' => 'loho_video')
    );

    Route::get(
        '/loho_netreport',
        array('uses' => 'About\AboutController@NetReport', 'as' => 'loho_netreport')
    );
});

Route::group(['prefix'=>'Query'], function() {
    
    Route::get(
        '/OrderQuery',
        array('uses' => 'Query\OrderQueryController@searchOrder', 'as' => 'OrderQuery')
    );

    Route::get(
        '/SearchItem',
        array('uses' => 'Query\SearchItemController@SearchItem', 'as' => 'SearchItem')
    );

    Route::get(
        '/OrderResult',
        array('uses' => 'Query\OrderResultController@OrderResult', 'as' => 'OrderResult')
    );

});
Route::group(['namespace' => 'Admin\ManageItems','prefix' => 'admin'], function () {

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
        '/uploadImg',
        array('uses' => 'AddItemsController@uploadImg', 'as' => 'uploadImg')
    );

    Route::post(
        '/deleteItemsFromDatabase',
        array('uses' => 'DeleteItemsController@deleteItemsFromDatabase', 'as' => 'deleteItemsFromDatabase')
    );

});

Route::group(['namespace' => 'Admin\ManageAccounts','prefix' => 'admin/ManageAccounts'], function () {

    Route::get(
        '/ManageAccounts',
        array('uses' => 'ManageAccountsController@ManageAccounts', 'as' => 'ManageAccounts')
    );

});

Route::group(['namespace' => 'Admin\ManageVouchers','prefix' => 'admin/ManageVouchers'], function () {

    Route::get(
        '/ManageVouchers',
        array('uses' => 'ManageVouchersController@ManageVouchers', 'as' => 'ManageVouchers')
    );

    Route::post(
        '/AddVouchers',
        array('uses' => 'AddVouchersController@AddVouchers', 'as' => 'AddVouchers')
    );

    Route::get(
        '/ManageUsersOwnVouchers',
        array('uses' => 'ManageUsersOwnVouchersController@ManageUsersOwnVouchers', 'as' => 'ManageUsersOwnVouchers')
    );
});

Route::group(['middleware' => 'AdminLogin','namespace' => 'Account','prefix' => 'Account'], function () {
    Route::get(
        'AccountInformation',
        array('uses' => 'AccountInfoController@AccountInformation', 'as' => 'AccountInformation')
    );

    Route::get(
        'ViewVoucher',
        array('uses' => 'AccountInfoController@ViewVoucher', 'as' => 'ViewVoucher')
    );

    Route::get(
        'ViewAllOrderHistory',
        array('uses' => 'AccountInfoController@ViewAllOrderHistory', 'as' => 'ViewAllOrderHistory')
    );

    Route::get(
        'ParticularOrderHistory',
        array('uses' => 'AccountInfoController@ParticularOrderHistory', 'as' => 'ParticularOrderHistory')
    );

    Route::get(
        'GetShoppingList',
        array('uses' => 'AccountInfoController@GetShoppingList', 'as' => 'GetShoppingList')
    );

    Route::get(
        'PersonalInformation',
        array('uses' => 'PersonalInfoController@PersonalInformation', 'as' => 'PersonalInformation')
    );

    Route::post(
        'ModifyPersonalInformation',
        array('uses' => 'PersonalInfoController@ModifyPersonalInformation', 'as' => 'ModifyPersonalInformation')
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
});

Route::group(['middleware' => 'AdminLogin','namespace' => 'ShoppingProccess','prefix' => 'ShoppingProccess'], function () {
    Route::get(
        'SelectVoucher',
        array('uses' => 'SelectVoucherController@SelectVoucher', 'as' => 'SelectVoucher')
    );

    Route::post(
        'UseVoucher',
        array('uses' => 'SelectVoucherController@UseVoucher', 'as' => 'UseVoucher')
    ); 

});
Route::group(['namespace' => 'ShoppingProccess','prefix' => 'ShoppingProccess'], function () {

    Route::get(
        '/ConfirmShoppingList',
        array('uses' => 'ConfirmShoppingListController@ConfirmShoppingList', 'as' => 'ConfirmShoppingList')
    );

    Route::post(
        '/AfterConfirmShoppingList',
        array('uses' => 'ConfirmShoppingListController@AfterConfirmShoppingList', 'as' => 'AfterConfirmShoppingList')
    );

    Route::post(
        '/GetVoucherState',
        array('uses' => 'ConfirmShoppingListController@GetVoucherState', 'as' => 'GetVoucherState')
    );

    Route::post(
        '/CancelVoucherState',
        array('uses' => 'ConfirmShoppingListController@CancelVoucherState', 'as' => 'CancelVoucherState')
    );

    Route::get(
        '/FinishOrder',
        array('uses' => 'FinishOrderController@FinishOrder', 'as' => 'FinishOrder')
    );
    
});

Route::group(['middleware' => 'ShoppingStateCheck','namespace' => 'ShoppingProccess','prefix' => 'ShoppingProccess'], function () {

    Route::get(
        '/CheckoutList',
        array('uses' => 'CheckoutListController@CheckoutList', 'as' => 'CheckoutList')
    );

    Route::get(
        '/FillOrderList',
        array('uses' => 'FillOrderListController@FillOrderList', 'as' => 'FillOrderList')
    );

    Route::get(
        '/GetOrderList',
        array('uses' => 'FillOrderListController@GetOrderList', 'as' => 'GetOrderList')
    );

    Route::get(
        '/GetUserData',
        array('uses' => 'FillOrderListController@GetUserData', 'as' => 'GetUserData')
    );

    Route::get(
        '/ClearOrder',
        array('uses' => 'ClearOrderController@ClearOrder', 'as' => 'ClearOrder')
    );
    
    Route::post(
        '/AfterFillOrderList',
        array('uses' => 'FillOrderListController@AfterFillOrderList', 'as' => 'AfterFillOrderList')
    );

    Route::get(
        '/queryAddress',
        array('uses' => 'CheckoutListController@queryAddress', 'as' => 'queryAddress')
    );
    
    Route::get(
        '/GetPaymentData',
        array('uses' => 'CheckoutListController@GetPaymentData', 'as' => 'GetPaymentData')
    );

    Route::post(
        '/queryCurrentOrderList',
        array('uses' => 'ClearOrderController@queryCurrentOrderList', 'as' => 'queryCurrentOrderList')
    );

    Route::post(
        '/AfterCheckoutList',
        array('uses' => 'CheckoutListController@AfterCheckoutList', 'as' => 'AfterCheckoutList')
    );

    Route::post(
        '/AfterClearOrder',
        array('uses' => 'ClearOrderController@AfterClearOrder', 'as' => 'AfterClearOrder')
    );
});

Route::group(['prefix' => 'Game','namespace' => 'Game'], function () {
    Route::get(
        'Index',
        array('uses' => 'GameController@Index', 'as' => 'Index')
    );

    Route::get(
        'Hamster',
        array('uses' => 'GameController@Hamster', 'as' => 'Hamster')
    );

    Route::get(
        'Card',
        array('uses' => 'GameController@Card', 'as' => 'Card')
    );

    Route::get(
        'Puzzle',
        array('uses' => 'GameController@Puzzle', 'as' => 'Puzzle')
    );

    Route::get(
        'Cups_Game',
        array('uses' => 'GameController@Cups_Game', 'as' => 'Cups_Game')
    );

    Route::get(
        'StoreVoucher',
        array('uses' => 'StoreVoucherController@StoreVoucher', 'as' => 'StoreVoucher')
    );

    Route::post(
        'AfterStoreVoucher',
        array('uses' => 'StoreVoucherController@AfterStoreVoucher', 'as' => 'AfterStoreVoucher')
    );
});
