@extends('Layout.master') 
@section('title','我的訂單') 
@section('head')
<link href="{{ URL::asset('css/CheckoutList.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('/js/ShoppingProcess/ClearOrder.js') }}"></script>
@stop
@section('content')
<div class="content">
    <div class="outer">
        <div class="wrap text-JhengHei">
            <div class="list position-center border pt-3">
                <div class="col" style='background:white; border-radius:10px;'>
                    <div class="row">
                        <h3 class="pt-3 ml-3">訂購人資料</h3>
                    </div>
                    <div class="row">
                        <div class="col-5">
                        <p class="ml-5">姓名:<span id="ordererName">{{$order__list[1]['name']}}</span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">          
                            <p class="ml-5">電話: <span id="ordererTEL">{{$order__list[1]['telephone_number']}}</span></p>  
                        </div>
                        <div class="col-5">
                            <p class="ml-5">手機: <span id="ordererPhone">{{$order__list[1]['phone_number']}}</span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="ml-5">地址: <span id="ordererAddress">{{$order__list[1]['address']}}</span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p class="ml-5">Email:<span id="ordererEmail">{{$order__list[1]['email']}}</span></p>
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="pt-3 ml-3">收件人資料</h3>
                    </div>
                    <div class="row">
                        <div class="col-5">
                        <p class="ml-5">姓名:<span id="RecipientName">{{$order__list[2]['name']}}</span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">          
                            <p class="ml-5">電話: <span id="RecipientTEL">{{$order__list[2]['telephone_number']}}</span></p>  
                        </div>
                        <div class="col-5">
                            <p class="ml-5">手機: <span id="RecipientPhone">{{$order__list[2]['phone_number']}}</span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="ml-5">地址: <span id="RecipientAddress">{{$order__list[2]['address']}}</span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p class="ml-5">Email:<span id="RecipientEmail">{{$order__list[2]['email']}}</span></p>
                        </div>
                    </div>
                </div>
                <div class='pt-3'style='background:#80D7F7; border-radius:10px;'>
                    <h5 class="ml-3">付款方式:<span id="payment_type"></span></h5>
                    <h5 class="ml-3" id="payment_info"></h5>
                    <div class="ml-3">
                        <h5 class='d-inline'>商品金額：</h5>
                        <h5 class="text-danger d-inline">$</h5>
                        <h5 class="text-danger d-inline" id="goodsTotal">{{$order__list[0]['goodsTotal']}}</h5>
                    </div>
                    <div class="ml-3">
                        <h5>運費小計：<span><span class="text-danger">$</span></span><span class="text-danger" id="shippingFee">{{$order__list[0]['shippingFee']}}</span><h5>                   
                    </div>
                    <div class="ml-3">
                        <h5>優惠折抵：<span id="coupon_price">{{$order__list[0]['coupon_price']}}</span></h5>
                        <h5>優惠代碼：<span id="coupon_code">{{$order__list[0]['coupon_code']}}</span></h5>
                    </div>
                    <div class="ml-3">
                        <h5>總計：<span class="text-danger">$</span><span class="text-danger" id="orderTotal">{{$order__list[0]['orderTotal']}}</span></h5>                   
                    </div>
                    <h3 class='text-danger font-weight-bold text-center'>以上資訊如有誤請盡速聯絡本公司</h3>                
                </div>
            </div>
            <div class="next">
                <button class="button btn btn-secondary" id="last_step">上一步</button>
                <button class="button btn btn-secondary" id="next_step">下一步</button>
            </div>
        </div>
    </div>
</div>
@stop