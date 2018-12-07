@extends('Layout.master') 
@section('title','修改密碼') 
@section('head')
<link href="{{ URL::asset('/css/ForgetPasswordToModify.css') }}" rel="stylesheet" type="text/css" /> @stop @section('content')



<div class="container-block">
    <div class="wrap text-center text-JhengHei">
        <div class="subTitle">修改密碼</div>
        <br>
        <form class="outer" action="SendModifyPassword" method="POST">
            {{ csrf_field() }}
            <div class="page-title">
                帳戶資訊
            </div>
            @if (count($errors)>0) 
                @foreach ($errors->all() as $error) 
                    {{$error}} 
                @endforeach 
            @endif
            <div class="input-area">
                <div class="input-text">
                    請輸入原密碼：
                </div>
                <input type="password"  style='width:20%' name = "origin_password" maxlength='10'>
            </div>
            <div class="page-title">
                更改帳戶
            </div>
            <div class="input-area">
                <div class="input-text">
                    *欲重設密碼：
                </div>
                <input type="password" style='width:20%' name="password" maxlength='10'>
            </div>
            <div class="remind-text">
                (限半形英文或數字，10碼內不限大小寫)
            </div>
            <div class="input-area">
                <div class="input-text">
                    *確認密碼：
                </div>
                <input type="password" style='width:20%'name="password_confirmation" maxlength='10'>
            </div>
            <div class="remind-text">
                (限半形英文或數字，10碼內不限大小寫)
            </div>
            <div class="submit-area">
                <button type="submit" class="btn btn-dark">確認更改</button>
                <button type="button" class="btn btn-dark" id="cancel">取消</button>
            </div>
        </form>

    </div>
</div>
<script>
    $(document).ready(function () {
        $('#cancel').click(function (e) { 
            e.preventDefault();
            window.location = 'AccountInformation';
        });
    });
</script>
@stop