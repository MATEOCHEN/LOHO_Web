<?php

namespace App\Http\Controllers\Admin\ManageVouchers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Users_own_voucher;

class ManageUsersOwnVouchersController extends BaseController
{ 
    public function ManageUsersOwnVouchers()
    {    
        $vouchers = Users_own_voucher::all();
        $vouchers_list = array();
         foreach ($vouchers as $voucher) {
             $voucher_tmp = [
                 'user_id' => $voucher->user_id,
                 'voucher_id' => $voucher->voucher_id,
             ];
             array_push($vouchers_list,$voucher_tmp);
         }
         $data = ['vouchers' => $vouchers_list];

         return view('Admin/ManageVouchers/ManageUsersOwnVouchers',compact('data'));
    }

}
