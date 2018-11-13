<?php

namespace App\Http\Controllers\ShoppingProccess;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Users_own_voucher;
use App\Voucher;
use Illuminate\Support\Facades\Session;
use Validator;
class FillOrderListController extends BaseController
{
    public function FillOrderList()
    {  
            $data = [
                'ordererName' => Session::get('ordererName', ''),
                'ordererEmail' => Session::get('ordererEmail', ''),
                'ordererTEL' => Session::get('ordererTEL', ''),
                'ordererPhone' => Session::get('ordererPhone', ''),
                'ordererAddress' => Session::get('ordererAddress', ''),
                'RecipientName' => Session::get('RecipientName', ''),
                'RecipientEmail' => Session::get('RecipientEmail', ''),
                'RecipientTEL' => Session::get('RecipientTEL', ''),
                'RecipientPhone' => Session::get('RecipientPhone', ''),
                'RecipientAddress' => Session::get('RecipientAddress', ''),
            ];
        
        return view('ShoppingProcess\FillOrderList',compact('data'));
    }

    //save shopping sum into session, check user whether input info 
    public function AfterFillOrderList(Request $request)
    {   
        $input = $request->all();
        $rules = [
        'ordererName' => 'required',
        'ordererEmail' => 'required',
        'ordererTEL' => 'required',
        'ordererPhone' => 'required',
        'ordererAddress' => 'required',
        'RecipientName' => 'required',
        'RecipientEmail' => 'required',
        'RecipientTEL' => 'required',
        'RecipientPhone' => 'required',
        'RecipientAddress' => 'required',
        ];

        $messages = [
        'ordererName.required'=>'訂購人姓名',
        'ordererEmail.required'=>'訂購人E-mail',
        'ordererTEL.required'=>'訂購人電話',
        'ordererPhone.required'=>'訂購人手機',
        'ordererAddress.required'=>'訂購人地址',
        'RecipientName.required'=>'收件人姓名',
        'RecipientEmail.required'=>'收件人E-mail',
        'RecipientTEL.required'=>'收件人電話',
        'RecipientPhone.required'=>'收件人手機',
        'RecipientAddress.required'=>'收件人地址',
        ];

        $validator = Validator::make($input,$rules,$messages);

        if($validator->passes())
        {
            $request->session()->put('ordererName', $request->ordererName);
            $request->session()->put('ordererEmail', $request->ordererEmail);
            $request->session()->put('ordererTEL', $request->ordererTEL);
            $request->session()->put('ordererPhone', $request->ordererPhone);
            $request->session()->put('ordererAddress', $request->ordererAddress);//需處理前面縣市地址
            $request->session()->put('RecipientName', $request->RecipientName);
            $request->session()->put('RecipientEmail', $request->RecipientEmail);
            $request->session()->put('RecipientTEL', $request->RecipientTEL);
            $request->session()->put('RecipientPhone', $request->RecipientPhone);
            $request->session()->put('RecipientAddress', $request->RecipientAddress);//需處理前面縣市地址
            return response()->json(['status' => 'success']);
        }else{
            return response()->json(['status' => 'fail','errors'=>$validator->errors()->all()]);
        }
    }
}
