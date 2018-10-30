@extends('Layout.master') 
@section('title','我的購物車') 
@section('head')
<link href="{{ URL::asset('css/ConfirmShoppingList.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
<script src="/LOHO_Web/public/js/ConfirmShoppingList.js"></script>
@stop
@section('content')
<div class="container-fluid">
    <div class="outer">
        <div class="wrap">
            <h1>訂單進度</h1>
            <div class="progress" style="height: 30px">
                <div class="progress-bar" role="progressbar" style="width: 33%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.1 確認商品</p></div>
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 33%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.2 填寫資料</p></div>
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 34%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.3 確認送出</p></div>
            </div>
            <div class="list"> 
                <div class="row align-self-end">
                    <div class="col-6 ml-2 text-left">
                        <h4 class="font-weight-bold">商品名稱</h4>
                    </div>
                    <div class="col text-center">
                        <h4 class="font-weight-bold">尺寸</h4>
                    </div>
                    <div class="col text-center">
                        <h4 class="font-weight-bold">數量</h4>
                    </div>
                    <div class="col text-center">
                        <h4 class="font-weight-bold">小計</h4>
                    </div>
                </div>
                <div class ="row" id="showBlock1"></div>
            </div>
            <div class ="row">
            <div class="col-10"></div>
                <div class="col">
                    <div class="row">
                        <h5>商品金額：</h5>
                        <span><h4 class="text-danger">$</h5></span><h5 class="text-danger" id="goodsTotal"></h5>
                    </div>
                    <div class="row">
                        <h5>運費小計：<h5>
                        <span><h5 class="text-danger">$70</h5></span><h5 class="text-danger" id="shippingFee"></h5>
                    </div>
                    <div class="row">
                        <h5>優惠折抵：</h5>
                        <button class="btn btn-success btn-sm" id="view_voucher">查看優惠券</button>
                    </div>
                    <div class="row">
                        <h5>總計：</h5>
                        <span><h5 class="text-danger">$</h5></span><h5 class="text-danger" id="orderTotal"></h5>
                    </div>
                </div>
            </div>
            <div class="next">
                <button class="btn btn-secondary" onclick="getConfirmCart()">繼續購物</button>
                <button class="btn btn-secondary" id="nextStep" onclick="">下一步</button>
            </div>
        </div>
    </div>
</div>
<script>
    $('#view_voucher').click(function (e) { 
        e.preventDefault();
        window.location = "http://localhost/LOHO_Web/public/Account/PersonalInformation";
    });
    $("#nextStep").click(function() {
            window.location  = "FillOrderList";
        })
</script>
@stop