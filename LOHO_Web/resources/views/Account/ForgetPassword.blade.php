@extends('Layout.master')

@section('title','忘記密碼')
@section('head')
<link href="{{ URL::asset('/css/Forget_Password.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')
<div class="container-block">
    <div class="wrap text-center">
        <div class="logo-img">
            <img src="{{ URL::asset('/Image/LOHO_Logo.png') }}" alt="" class="img-fluid">
        </div>
        <div class="page-title">忘記密碼?</div>
        <br>
        <div class="outer">
            <div class="input-area">
                <div class="input-text">帳號：</div>
                <input type="text">
            </div>
            <div class="input-area">
                <div class="input-text">E-MAIL：</div>
                <input type="text">
                <div class="input-button">
                    <button type="button" class="btn btn-dark">寄出驗證信</button>
                </div>
            </div>
            <div class="input-area">
                <div class="input-text">驗證碼：</div>
                <input type="text">
                <div class="input-button">
                    <button type="button" class="btn btn-dark">驗證</button>
                </div>
            </div>
            <div class="input-area text-center">
                <div class="remind-text">(請在10分鐘內輸入驗證碼)</div>
            </div>
            <div class="submit-area">
                <button type="button" class="btn btn-dark">重新設定</button>
            </div>
        </div>

    </div>
</div>
@stop

