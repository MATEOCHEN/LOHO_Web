@extends('Layout.master')

@section('title','帳號資訊')
@section('head')
<link href="{{ URL::asset('/css/ForgetPasswordToModify.css') }}" rel="stylesheet" type="text/css" />
@stop
@section('content')
<div class="content">
    <div class="container-block">
        <div class="d-flex flex-row">
            <div class="left-block">
                    <ul class="list-group mt-3 text-JhengHei">
                        <a class="list-group-item ml-3 h5" href="{{url::asset('Account/PersonalInformation')}}">個人資訊</a>
                        <a class="list-group-item ml-3 h5" href="{{url::asset('Account/AccountInformation')}}">帳戶資訊</a>
                        <a class="list-group-item ml-3 h5" href="{{url::asset('Account/ViewAllOrderHistory')}}">訂單紀錄</a>
                        <a class="list-group-item ml-3 h5" href="{{url::asset('Account/ViewVoucher')}}">優惠券資訊</a>
                    </ul>
                </div>
            </div>
            <div class="col right-block">
                <div class="wrap text-center text-JhengHei"> 
                    <div class="subTitle">帳號資訊</div>
                    <br>
                    <div class="outer">
                        <div class="page-title">
                            帳戶資訊：
                        </div>
                        <div class="input-area">
                            <div class="input-text">
                                帳號：<span id="user_account">{{$user_list['account'] }}</span>
                            </div>
                        </div>
                        <div class="page-title">
                            更改密碼：
                            <button type="button" class="btn btn-dark" id = "changePassword">修改密碼</button>
                        </div>
                    </div>
                </div>
            </div>
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

