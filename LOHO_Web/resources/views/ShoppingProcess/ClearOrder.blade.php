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
        <div class="wrap">
            <h1>訂單進度</h1>
            <div class="progress" style="height: 30px">
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.1 確認商品</p></div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.2 填寫資料</p></div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.3 付款方式</p></div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.4 確認訂單</p></div>
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.5 完成訂單</p></div>
            </div>
            <div class="col">
                <h3 class="ml-3">訂購人資料</h3>
                    <div class = "row">
                        <p class="ml-5">姓名:<span id="ordererName"></span></p>
                        <p class="ml-5">Email:<span id="ordererEmail"></span></p>
                    </div>
                    <div class = "row">
                        <p class="ml-5">電話: <span id="ordererTEL"></span></p>
                        <p class="ml-5">手機: <span id="ordererPhone"></span></p>  
                    </div>
                <p class="ml-4">地址: <span id="ordererAddress"></span></p>
                <h3 class="ml-3">收件人資料</h3>
                <div class = "row">
                        <p class="ml-5">姓名:<span id="RecipientName"></span></p>
                        <p class="ml-5">Email:<span id="RecipientEmail"></span></p>
                    </div>
                    <div class = "row">
                        <p class="ml-5">電話: <span id="RecipientTEL"></span></p>
                        <p class="ml-5">手機: <span id="RecipientPhone"></span></p>
                        <p class="ml-4">地址: <span id="RecipientAddress"></span></p>                       
                    </div>
                <h3 class="ml-3">付款方式:<span id="payment_type"></span></h3>
                <h3 class="ml-3" id="payment_info"></h3>                
            </div>
            <div class="next">
                <button class="button btn btn-secondary" id="last_step">上一步</button>
                <button class="button btn btn-secondary" id="next_step">下一步</button>
            </div>
        </div>
    </div>
</div>
@stop