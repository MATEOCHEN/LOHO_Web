@extends('Layout.master') @section('title','更改密碼') @section('head')
<link href="{{ URL::asset('/css/ForgetPasswordToModify.css') }}" rel="stylesheet" type="text/css" /> @stop @section('content')
<div class="container-block">
    <div class="wrap text-center">
        <div class="logo-img">
            <img src="{{ URL::asset('/Image/LOHO_Logo.png') }}" alt="" class="img-fluid">
        </div>
        <div class="page-title">忘記密碼?</div>
        <br>
        <form class="outer" action="" method="">
            {{ csrf_field() }}
            <div class="subTitle">
                帳戶資訊
            </div>
            <div class="input-area">
                <div class="input-text">
                    帳號：
                </div>
                <input type="text" name = "Account">
            </div>
            <div class="subTitle">
                更改帳戶
            </div>
            <div class="input-area">
                <div class="input-text">
                    *重設密碼：
                </div>
                <input type="text" name="password">
            </div>
            <div class="remind-text">
                (限半形英文或數字，10碼內不限大小寫)
            </div>
            <div class="input-area">
                <div class="input-text">
                    *確認密碼：
                </div>
                <input type="text" name="password_confirmation">
            </div>
            <div class="remind-text">
                (限半形英文或數字，10碼內不限大小寫)
            </div>
            <div class="submit-area">
                <button type="submit" class="btn btn-dark">確認更改</button>
                <button type="submit" class="btn btn-dark">取消</button>
            </div>
        </form>

    </div>
</div>
@stop