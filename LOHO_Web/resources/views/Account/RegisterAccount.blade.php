@extends('Layout.master')

@section('title','註冊帳號')
<link href="{{ URL::asset('/css/RegisterAccount.css') }}" rel="stylesheet" type="text/css" />

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
                        <div class="input-area">
                            <div class="input-name-text">*暱稱：</div>
                            <input type="text" name = "nickname">
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
                    <div class="input-text">*連絡電話：</div>
                    <input type="text">
                    <div class="input-text">*行動電話：</div>
                    <input type="text">
                </div>
                <div class="input-area">
                    <div class="input-text">*郵遞區號：</div>
                    <input type="text">
                </div>
                <div class="input-area">
                    <div class="input-text">*收件地址：</div>
                    <input type="text" style="width: 70%;">
                </div>
                <div class="input-area">
                    <div class="input-text">*電子信箱：</div>
                    <input type="text">
                </div>
                <div class="subTitle">帳戶設定</div>
                <div class="input-area">
                    <div class="input-text">*帳號：</div>
                    <input type="text">
                </div>
                <div class="input-area">
                    <div class="input-text">*密碼：</div>
                    <input type="text">
                </div>
                <div class="input-area">
                    <div class="input-text">*確認密碼：</div>
                    <input type="text">
                </div>
                <div class="input-area">
                    <div class="e-report">
                        <input type="radio" name="e-report" "" value="yes"> 我要訂閱電子報
                    </div>
                </div>
                <div class="submit-area" action="AfterRegisterAccount" method="POST">
                    <button type="submit" class="btn btn-secondary active" type="submit">註冊</button>
                    <div class="submit-text">
                        按下註冊按鈕的同時，表示您已經同意我們的資料使用政策與服務條款
                    </div>
                </div>
            </form>
        </div>

    </div>
    @stop