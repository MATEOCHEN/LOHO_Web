<?php

namespace App\Http\Controllers\Admin\ManageVouchers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Voucher;

class AddVouchersController extends BaseController
{ 
    public function AddVouchers(Request $request)
    {    
        $voucher = new Voucher;
        $voucher->coupon_code = $request->input_voucher_coupon_code;
        $voucher->discounted_price = $request->input_voucher_price;
        
        $voucher->save();
        return response()->json(['msg' => '新增成功']);
    }

}
