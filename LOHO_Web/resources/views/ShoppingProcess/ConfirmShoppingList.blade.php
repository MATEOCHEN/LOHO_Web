@extends('Layout.master') 
@section('title','我的購物車') 
@section('head')
<link href="{{ URL::asset('css/ConfirmShoppingList.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />

@stop
@section('content')
<div class="content">
    <div class="outer">
        <div class="wrap">
            <h1 class="h1">商品清單</h1>
            <div class="list">
                <img src="../專題檔案/遊戲畫面素材/12134.PNG">
            </div>

            <div class="total">
                <ul class="ul">
                    <li class="li h4">商品金額</li>
                    <li class="li h4">$300</li>
                </ul>
                <ul class="ul">
                    <li class="li h4">運費小計</li>
                    <li class="li h4">$70</li>
                </ul>
                <ul>
                    <li class="h4">優惠折抵</li>
                    <li><button class=" btn btn-success" id="view_voucher">查看優惠券</button></li>
                </ul>
                <hr>
                <ul class="ul">
                    <li class="li h4">總計</li>
                    <li class="li h4">$370</li>
                </ul>
            </div>

            <div class="next">
                <button class="button btn btn-secondary" onclick="">繼續購物</button>
                <button class="button btn btn-secondary" id="nextStep" onclick="">下一步</button>
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