@extends('Layout.master')

@section('title','登入帳號')
@section('head')
<link href="{{ URL::asset('/css/Account_Log_In.css') }}" rel="stylesheet" type="text/css" />
@stop


@section('content')
<div class="container-block">
    <div class="wrap text-center">
        <div class="logo-img">
            <img src="{{ URL::asset('/Image/LOHO_Logo.png') }}" alt="" class="img-fluid">
        </div>
        <br>
        <h2>使用LOHO帳號登入</h2>
        <form action="AfterAccount_Log_In" method="POST">
            {{ csrf_field() }}
            <input type="text" name="account" value="<?php  csrf_token(); ?>">
            <input type="password" name="password"value="<?php  csrf_token(); ?>">
            <div class="top-button">
                <button type="button" class="btn btn-dark" onclick="window.location='{{ url("Account/ForgetPassword") }}'">忘記密碼</button>
                <button type="button" class="btn btn-dark" onclick="window.location='{{ url("Account/RegisterAccount") }}'">註冊</button>
            </div>
            <div class="down-button">
                <button type="submit" class="btn btn-dark">登入</button>
                <button type="button" class="btn btn-primary">用Facebook登入</button>
            </div>
        </form>
        {{-- {{}}為blade執行區塊 --}}
        {{ $title}} {{ $data['account']}}{{ $data['password']}}
        {{-- 如果tel不存在傳預設值 --}}
        {{isset($tel)?$tel:'無此電話'}}
        @if($price > 100)
            {{'高單價'}}<br>
            @else
            {{'低單價'}}<br>
        @endif
        @foreach($scores as $subject => $score)
            {{$subject}}={{$score}}<br>
        @endforeach
        @if(session('msg'))
            <p>帳號或密碼錯誤</p>
        @endif
    </div>
</div>
@stop

