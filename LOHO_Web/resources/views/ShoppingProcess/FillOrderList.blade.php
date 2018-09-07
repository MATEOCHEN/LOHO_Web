@extends('Layout.master') 
@section('title','我的購物車') 
@section('head')
<link href="{{ URL::asset('css/FillOrderList.css') }}" rel="stylesheet" type="text/css" />

@stop
@section('content')
<div class="content">
    <form class="outer" action="" method="">
        <div class="wrap">
            <div class="input-area">訂購人資料</div>
            <div class="input-area">
                <div class="input-text">
                    性別:
                    <input type="radio" name="gender" value="male">男
                    <input type="radio" name="gender" value="female">女
                </div>
            </div>
            <div class="input-area">
                <div class="input-text">
                    姓名：
                    <input type="text" name = "name">
                </div>
                <div class="input-text">
                    Email：
                    <input type="text" name = "email">
                </div>
            </div>
            <div class="input-area">
                <div class="input-text">
                    電話：
                    <input type="text" name = "telphone">
                </div>
                <div class="input-text">
                    手機：
                    <input type="text" name = "selphone">
                </div>
            </div>
            <div class="input-area">
                <div class="input-text">
                    郵遞區號：
                    <input type="text" name = "number">
                </div>
                <div class="input-text">
                    地址：
                    <input type="text" name = "address">
                </div>
            </div>

            <div class="input-area">
                    收件人資料
                    <input type="radio" name="" value="">同收件人資料
            </div>
            <div class="input-area">
                <div class="input-text">
                    性別:
                    <input type="radio" name="gender" value="male"> 男
                    <input type="radio" name="gender" value="female"> 女
                </div>
            </div>
            <div class="input-area">
                <div class="input-text">
                    姓名：
                    <input type="text" name = "name">
                </div>
                <div class="input-text">
                    Email：
                    <input type="text" name = "email">
                </div>
            </div>
            <div class="input-area">
                <div class="input-text">
                    電話：
                    <input type="text" name = "telphone">
                </div>
                <div class="input-text">
                    手機：
                    <input type="text" name = "selphone">
                </div>
            </div>
            <div class="input-area">
                <div class="input-text">
                    郵遞區號：
                    <input type="text" name = "number">
                </div>
                <div class="input-text">
                    地址：
                    <input type="text" name = "address">
                </div>
            </div>
            <div class="next">
                <button class="button" onclick="">繼續購物</button>
                <button class="button" onclick="">下一步</button>
            </div>
        </div>
    </form>
</div>
@stop