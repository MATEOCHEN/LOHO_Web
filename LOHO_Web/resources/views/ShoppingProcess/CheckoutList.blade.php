@extends('Layout.master') 
@section('title','我的購物車') 
@section('head')
<link href="{{ URL::asset('css/CheckoutList.css') }}" rel="stylesheet" type="text/css" />

@stop
@section('content')
<div class="content">
    <div class="outer">
        <div class="wrap">
            付款方式
            <form class="form">
                <div class="option">
                    <input type="radio" name="pay" value="1">ATM轉帳
                </div>
                <div class="option">                   
                    <input type="radio" name="pay" value="2">銀行匯款
                </div>
                <div class="option">
                    <input type="radio" name="pay" value="3">貨到付款
                </div>
                <div class="option">
                    <input type="radio" name="pay" value="4">信用卡線上付款
                </div>
            </form>
            <div class="next">
                <button class="button" onclick="">繼續購物</button>
                <button class="button" onclick="">下一步</button>
            </div>
        </div>
    </div>
</div>
@stop