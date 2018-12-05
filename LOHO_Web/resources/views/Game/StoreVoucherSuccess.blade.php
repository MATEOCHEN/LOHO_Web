@extends('Layout.master') 
@section('title','存入優惠卷') 
@section('head')
<link href="{{ URL::asset('/css/Account_Log_In.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('/js/Game/StoreVoucher.js') }}"></script>
@stop
@section('content')
<div class = "content">
    <div class="container-block">
        <div class="wrap text-center">
            <div class="logo-img">
                <img src="<?php echo asset('/svg/New LOGO.svg');?>" width="300px" alt="" class="img-fluid">
            </div>
            <br>
            <h2>儲存優惠卷成功</h2>
            <form>
                <div class="top-button">
                    <button type="button" class="btn btn-dark" onclick="window.location='{{ url("Account/ViewVoucher") }}'">檢視優惠卷</button>
                    <button type="button" class="btn btn-dark" onclick="window.location='{{ url("/") }}'">前往官網</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop