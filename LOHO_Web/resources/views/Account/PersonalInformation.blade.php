@extends('Layout.master')

@section('title','個人資訊')
@section('head')
<link href="{{ URL::asset('/css/PersonalInformation.css') }}" rel="stylesheet" type="text/css" />
@stop
@section('content')
<div class="container-block">
    <div class="wrap text-center">
        <div class="logo-img">
            <img src="../LOHO-Project/Image/LOHO_Logo.PNG" alt="" class="img-fluid">
        </div>
        <div class="page-title">會員資訊</div>
        <form class="outer">
            <div class="subTitle">個人資訊</div>
            <div class="subTitle-button">
                <button type="button" class="btn btn-dark">修改</button>
            </div>
            <div class="input-area">
                <div class="left">
                    <div class="input-area">
                        <div class="input-name-text">*姓名：</div>
                        <input type="text">
                    </div>
                    <div class="input-area">
                        <div class="input-name-text">*暱稱：</div>
                        <input type="text">
                    </div>
                </div>
                <div class="right">

                </div>
            </div>
            <div class="input-area">
                <div class="gender-radio">
                    性別：
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
            <div class="input-area">
                <div class="e-report">
                    <input type="radio" name="e-report" "" value="yes"> 訂閱電子報
                </div>
            </div>
            <div class="post-area">
                <button type="button" class="btn btn-dark">寄出驗證信</button>
                <div class="remind-text">(請在10分鐘內輸入驗證碼)</div>
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
        </form>
    </div>

</div>
@stop
