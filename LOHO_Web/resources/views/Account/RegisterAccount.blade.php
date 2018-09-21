@extends('Layout.master')

@section('title','註冊帳號')
@section('head')
<link href="{{ URL::asset('/css/RegisterAccount.css') }}" rel="stylesheet" type="text/css" />
@stop
@section('content')


    <div class="container-block">
        <div class="wrap text-center">
            <div class="logo-img">
                <img src="{{ URL::asset('/Image/LOHO_Logo.png') }}" alt="" class="img-fluid">
            </div>
            <div class="page-title">註冊個人帳號</div>
            <form class="outer" action="AfterRegisterAccount" method="POST">
                    {{ csrf_field() }}
                <div class="subTitle">會員資訊</div>
                <div class="input-area">
                    <div class="left">
                        <div class="input-area">
                            <div class="input-name-text">*姓名：</div>
                            <input type="text" name = "name">
                        </div>
                    </div>
                    <div class="right">
                        <button type="button" class="btn btn-primary btn-lg">用Facebook快速登入</button>
                    </div>
                </div>
                <div class="input-area">
                    <div class="gender-radio">
                        <input type="radio" name="gender" value="boy"> 男
                        <input type="radio" name="gender" value="girl"> 女
                    </div>
                </div>
                <div class="input-area">
                    <div class="input-text">*市話：</div>
                    <input type="text" name="telephone_number">
                    <div class="input-text">*行動電話：</div>
                    <input type="text" name = "phone_number">
                </div>
                <div class="input-area">
                    <div class="input-text">*收件地址：</div>
                    <input type="text" style="width: 70%;" name="address">
                </div>
                <div class="input-area">
                    <div class="input-text">*電子信箱：</div>
                    <input type="text" name="email">
                </div>
                <div class="subTitle">帳戶設定</div>
                <div class="input-area">
                    <div class="input-text">*帳號：</div>
                    <input type="text" name="account">
                </div>
                <div class="input-area">
                    <div class="input-text">*密碼：</div>
                    <input type="password" , name="password">
                </div>
                <div class="input-area">
                    <div class="input-text">*確認密碼：</div>
                    <input type="password" , name="confirm_password">
                </div>
                <div class="input-area">
                    <div class="e-report">
                        <input type="radio"> 我要訂閱電子報
                    </div>
                </div>
                <div class="submit-area" action="AfterRegisterAccount" method="POST">
                    <button type="submit" class="btn btn-secondary active" type="submit">註冊</button>
                    <div class="submit-text">
                        按下註冊按鈕的同時，表示您已經同意我們的資料使用政策與服務條款
                    </div>
                </div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </form>
        </div>

    </div>
    @stop