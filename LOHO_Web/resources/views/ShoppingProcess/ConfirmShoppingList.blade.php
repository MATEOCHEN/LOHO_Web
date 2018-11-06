@extends('Layout.master') 
@section('title','我的購物車') 
@section('head')
<link href="{{ URL::asset('css/ConfirmShoppingList.css') }}" rel="stylesheet" type="text/css"/>
<script src="/LOHO_Web/public/js/ShoppingProcess/ConfirmShoppingList.js"></script>
@stop
@section('content')
<div class="container-fluid">   
    <div class="outer">
        <div class="wrap">
            <h1>訂單進度</h1>
            <div class="progress" style="height: 30px">
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.1 確認商品</p></div>
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.2 填寫資料</p></div>
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.3 付款方式</p></div>
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.4 確認訂單</p></div>
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.5 完成訂單</p></div>
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
                        <span><h5 class="text-danger">$</h5></span><h5 class="text-danger" id="shippingFee">70</h5>
                    </div>
                    <div class="row">
                        <h5>優惠折抵：<span id="coupon_price">{{$data['coupon_price']}}</span></h5>
                        @if (Auth::check())
                            <button class="btn btn-success btn-sm" id="view_voucher">使用優惠券</button>
                        @else
                        <div>
                            <button class="btn btn-success btn-sm" id="view_voucher" disabled = "disabled">使用優惠券</button>
                        </div>
                        <div>
                            需登入才可使用優惠卷喔!
                        </div>
                        @endif
                    </div>
                    <div class="row">
                        <h5>總計：</h5>
                        <span><h5 class="text-danger">$</h5></span><h5 class="text-danger" id="orderTotal"></h5>
                    </div>
                </div>
            </div>
            <div class="next">
                <button class="btn btn-secondary" id="continue_shopping">繼續購物</button>
                <button class="btn btn-secondary" id="nextStep">下一步</button>
            </div>
        </div>
    </div>
</div>

@stop

