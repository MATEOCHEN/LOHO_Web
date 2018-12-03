@extends('Layout.master') 
@section('title','我的購物車') 
@section('head')
<link href="{{ URL::asset('css/CheckoutList.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('/js/ShoppingProcess/ClearOrder.js') }}"></script>
@stop
@section('content')
<div class="content">
    <div class="outer">
        <div class="wrap text-JhengHei">
            <h1 class="text-center">訂單進度</h1>
            <div class="progress" style="height: 30px">
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.1 確認商品</p></div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.2 填寫資料</p></div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.3 付款方式</p></div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.4 確認訂單</p></div>
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.5 完成訂單</p></div>
            </div>
            <div class="list position-center border pt-3">
                <div class="col" style='background:white; border-radius:10px;'>
                    <div class="row">
                        <h3 class="pt-3 ml-3">訂購人資料</h3>
                    </div>
                    <div class="row">
                        <div class="col-5">
                        <p class="ml-5">姓名:<span id="ordererName"></span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">          
                            <p class="ml-5">電話: <span id="ordererTEL"></span></p>  
                        </div>
                        <div class="col-5">
                            <p class="ml-5">手機: <span id="ordererPhone"></span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="ml-5">地址: <span id="ordererAddress"></span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p class="ml-5">Email:<span id="ordererEmail"></span></p>
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="pt-3 ml-3">收件人資料</h3>
                    </div>
                    <div class="row">
                        <div class="col-5">
                        <p class="ml-5">姓名:<span id="RecipientName"></span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">          
                            <p class="ml-5">電話: <span id="RecipientTEL"></span></p>  
                        </div>
                        <div class="col-5">
                            <p class="ml-5">手機: <span id="RecipientPhone"></span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="ml-5">地址: <span id="RecipientAddress"></span></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p class="ml-5">Email:<span id="RecipientEmail"></span></p>
                        </div>
                    </div>
                </div>
                <div class='pt-3'style='background:#80D7F7; border-radius:10px;'>
                    <h5 class="ml-3">付款方式:<span id="payment_type"></span></h5>
                    <h5 class="ml-3" id="payment_info"></h5>
                    <div class="ml-3">
                        <h5 class='d-inline'>商品金額：</h5>
                        <h5 class="text-danger d-inline">$</h5>
                        <h5 class="text-danger d-inline" id="goodsTotal"></h5>
                    </div>
                    <div class="ml-3">
                        <h5>運費小計：<span><span class="text-danger">$</span></span><span class="text-danger" id="shippingFee">70</span><h5>                   
                    </div>
                    <div class="ml-3">
                        <h5>優惠折抵：<span id="coupon_price"></span></h5>
                        <h5>優惠代碼：<span id="coupon_code"></span></h5>
                    </div>
                    <div class="ml-3">
                        <h5>總計：<span class="text-danger">$</span><span class="text-danger" id="orderTotal"></span></h5>                   
                    </div>
                    <h3 class='text-danger font-weight-bold text-center'>以上資訊如有誤請到前頁做修改</h3>                
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