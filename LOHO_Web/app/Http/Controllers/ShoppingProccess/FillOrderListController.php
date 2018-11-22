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
                'ordererPostal_code' =>Session::get('ordererPostal_code', ''),
                'ordererAddress' => Session::get('ordererAddress', ''),
                'RecipientName' => Session::get('RecipientName', ''),
                'RecipientEmail' => Session::get('RecipientEmail', ''),
                'RecipientTEL' => Session::get('RecipientTEL', ''),
                'RecipientPhone' => Session::get('RecipientPhone', ''),
                'RecipientPostal_code' =>Session::get('RecipientPostal_code', ''),
                'RecipientAddress' => Session::get('RecipientAddress', ''),
            ];
        
        return view('ShoppingProcess\FillOrderList',compact('data'));
    }

    public function GetOrderList()
    {   
        $ordererPostal_code = Session::get('ordererPostal_code', '');
        $ordererCountry = Session::get('ordererCountry', '');
        $ordererArea = Session::get('ordererArea', '');
        $RecipientPostal_code = Session::get('RecipientPostal_code', '');
        $RecipientCountry = Session::get('RecipientCountry', '');
        $RecipientArea = Session::get('RecipientArea', '');
        
        return response()->json(['ordererPostal_code' => $ordererPostal_code,
                                'ordererCountry'=>$ordererCountry,
                                'ordererArea'=>$ordererArea,
                                'RecipientPostal_code'=>$RecipientPostal_code,
                                'RecipientCountry'=>$RecipientCountry,
                                'RecipientArea'=>$RecipientArea,
                                ]);
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
        'ordererPostal_code' => 'required',
        'ordererAddress' => 'required',
        'RecipientName' => 'required',
        'RecipientEmail' => 'required',
        'RecipientTEL' => 'required',
        'RecipientPhone' => 'required',
        'RecipientPostal_code' =>'required',
        'RecipientAddress' => 'required',
        ];

        $messages = [
        'ordererName.required'=>'訂購人姓名',
        'ordererEmail.required'=>'訂購人E-mail',
        'ordererTEL.required'=>'訂購人電話',
        'ordererPhone.required'=>'訂購人手機',
        'ordererPostal_code.required'=>'訂購人郵遞區號',
        'ordererAddress.required'=>'訂購人地址',
        'RecipientName.required'=>'收件人姓名',
        'RecipientEmail.required'=>'收件人E-mail',
        'RecipientTEL.required'=>'收件人電話',
        'RecipientPhone.required'=>'收件人手機',
        'RecipientPostal_code.required'=>'收件人郵遞區號',
        'RecipientAddress.required'=>'收件人地址',
        ];

        $validator = Validator::make($input,$rules,$messages);

        if($validator->passes())
        {   
            $ordererAddress_total = $request->ordererCountry.$request->ordererArea.$request->ordererAddress;
            $RecipientAddress_total = $request->RecipientCountry.$request->RecipientArea.$request->RecipientAddress;

            $request->session()->put('ordererName', $request->ordererName);
            $request->session()->put('ordererEmail', $request->ordererEmail);
            $request->session()->put('ordererTEL', $request->ordererTEL);
            $request->session()->put('ordererPhone', $request->ordererPhone);
            $request->session()->put('ordererPostal_code', $request->ordererPostal_code);//bug
            $request->session()->put('ordererCountry', $request->ordererCountry);
            $request->session()->put('ordererArea', $request->ordererArea);
            $request->session()->put('ordererAddress', $request->ordererAddress);//需處理前面縣市地址
            $request->session()->put('ordererAddress_total', $ordererAddress_total);
            $request->session()->put('RecipientName', $request->RecipientName);
            $request->session()->put('RecipientEmail', $request->RecipientEmail);
            $request->session()->put('RecipientTEL', $request->RecipientTEL);
            $request->session()->put('RecipientPhone', $request->RecipientPhone);
            $request->session()->put('RecipientPostal_code', $request->RecipientPostal_code);//bug
            $request->session()->put('RecipientCountry', $request->RecipientCountry);
            $request->session()->put('RecipientArea', $request->RecipientArea);
            $request->session()->put('RecipientAddress', $request->RecipientAddress);//需處理前面縣市地址
            $request->session()->put('RecipientAddress_total', $RecipientAddress_total);
            return response()->json(['status' => 'success']);
        }else{
            return response()->json(['status' => 'fail','errors'=>$validator->errors()->all()]);
        }
    }
    public function GetUserData()
    {
        
    }
}
