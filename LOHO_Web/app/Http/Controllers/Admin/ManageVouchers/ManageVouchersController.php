<?php

namespace App\Http\Controllers\Admin\ManageVouchers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Voucher;

class ManageVouchersController extends BaseController
{ 
    public function ManageVouchers()
    {    
        $vouchers = Voucher::all();
        $vouchers_list = array();
         foreach ($vouchers as $voucher) {
             $voucher_tmp = [
                 'id' => $voucher->id,
                 'coupon_code' => $voucher->coupon_code,
                 'discounted_price' => $voucher->discounted_price,
                 'user_id' => $voucher->user_id,
                 'created_at' => $voucher->created_at,
                 'updated_at' => $voucher->updated_at
             ];
             array_push($vouchers_list,$voucher_tmp);
         }
         $data = ['vouchers' => $vouchers_list];

         return view('Admin/ManageVouchers/ManageVouchers',compact('data'));
    }

}
