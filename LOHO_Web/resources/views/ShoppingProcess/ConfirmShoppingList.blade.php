@extends('Layout.master') 
@section('title','我的購物車') 
@section('head')
<link href="{{ URL::asset('css/ConfirmShoppingList.css') }}" rel="stylesheet" type="text/css" />

@stop
@section('content')
<div class="content">
<div class="outer">
    <div class="wrap">
        <h1>商品清單</h1>
        <div class="list">
            <img src="../專題檔案/遊戲畫面素材/12134.PNG">
        </div>

        <div class="total">
            <ul class="ul">
                <li class="li">商品金額</li>
                <li class="li">$300</li>
            </ul>
            <ul class="ul">
                <li class="li">運費小計</li>
                <li class="li">$70</li>
            </ul>
            <ul>
                <li>優惠折抵</li>
                <li><button class="" onclick="">查看優惠券</button></li>
            </ul>
            <hr>
            <ul class="ul">
                <li class="li">總計</li>
                <li class="li">$370</li>
            </ul>
        </div>

        <div class="next">
            <button class="button" onclick="">繼續購物</button>
            <button class="button" onclick="">下一步</button>
        </div>
    </div>
</div>
</div>
@stop