@extends('Layout.master')

@section('title','帳號資訊')
@section('head')
<link href="{{ URL::asset('/css/ForgetPasswordToModify.css') }}" rel="stylesheet" type="text/css" />
@stop
@section('content')
    <div class="container-block">
        <div class="wrap text-center">
            <div class="logo-img">
                <img src="<?php echo asset('/svg/New LOGO.svg');?>" width="300px" alt="" class="img-fluid">
            </div>
            <div class="page-title">帳號資訊</div>
            <br>
            <div class="outer">
                <div class="subTitle">
                    帳戶資訊
                </div>
                <div class="input-area">
                    <div class="input-text">
                        帳號：<span id="user_account">{{$user_list['account'] }}</span>
                    </div>
                </div>
                <div class="subTitle">
                    更改帳戶
                    <button type="button" class="btn btn-dark" id = "changePassword">修改密碼</button>
                </div>
            </div>

        </div>
    </div>
<script>
$(document).ready(function () {
    $('#changePassword').click(function (e) { 
        e.preventDefault();
        window.location = "ModifyPassword";
    });
});
</script>    
@stop

