@extends('Layout.master')

@section('title','帳號資訊')
@section('head')
<link href="{{ URL::asset('/css/ForgetPasswordToModify.css') }}" rel="stylesheet" type="text/css" />
@stop
@section('content')
    <div class="container-block">
        <div class="wrap text-center">
            <div class="logo-img">
                <img src="{{ URL::asset('/Image/LOHO_Logo.png') }}" alt="" class="img-fluid">
            </div>
            <div class="page-title">會員資訊</div>
            <br>
            <div class="outer">
                <div class="subTitle">
                    帳戶資訊
                </div>
                <div class="input-area">
                    <div class="input-text">
                        帳號：
                    </div>
                    <input type="text">
                </div>
                <div class="input-area">
                    <div class="input-text">
                        密碼：
                    </div>
                    <input type="text">
                </div>
                <div class="subTitle">
                    更改帳戶
                    <button type="button" class="btn btn-dark">修改</button>
                </div>
                <div class="input-area">
                    <div class="input-text">
                        *重設密碼：
                    </div>
                    <input type="text">
                </div>
                <div class="remind-text">
                    (限半形英文或數字，10碼內不限大小寫)
                </div>
                <div class="input-area">
                    <div class="input-text">
                        *確認密碼：
                    </div>
                    <input type="text">
                </div>
                <div class="remind-text">
                    (限半形英文或數字，10碼內不限大小寫)
                </div>
                <div class="input-area" >
                    <button type="button" class="btn btn-dark" style="text-align: left">寄出驗證信</button>
                </div>
                <div class="input-area">
                    <div class="input-text">
                        *驗證碼：
                    </div>
                    <input type="text">
                </div>
                <div class="submit-area">
                    <button type="button" class="btn btn-dark">取消</button>
                    <button type="button" class="btn btn-dark">確認更改</button>
                </div>
            </div>

        </div>
    </div>
@stop

