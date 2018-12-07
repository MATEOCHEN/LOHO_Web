@extends('Layout.master')

@section('title','個人資訊')
@section('head')
<link href="{{ URL::asset('/css/PersonalInformation.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('js/Account/PersonalInformation.js') }}"></script>
<script src="{{ URL::asset('js/Shopping/jquery.twzipcode.min.js')}}"></script>
@stop
@section('content')
<div class="container-block">
    <div class="wrap text-center text-JhengHei">
        <form class="outer">
            <div class="subTitle">個人資訊</div>
            <div class="subTitle-button">
                <button type="button" class="btn btn-dark" id="modify_info">修改資料</button>
            </div>
            <div class="input-area">
                <div class="left">
                    <div class="input-area">
                        <div class="input-name-text"><span class='text-danger'>*</span>姓名：</div>
                        <input type="text" value="{{$data['name'] }}" id="name">
                    </div>
                </div>
                <div class="right">

                </div>
            </div>
            <div class="input-area">
                <div class="input-text"><span class='text-danger'>*</span>連絡電話：</div>
                <input type="text" style="width:15%" value="{{$data['telephone_number'] }}" id="telephone_number" placeholder="ex：048720552" 
                maxlength='10' onkeyup='this.value=this.value.replace(/\D/gi,"")'>
                <div class="input-text"><span class='text-danger'>*</span>行動電話：</div>
                <input type="text" style="width:15%" value="{{$data['phone_number'] }}" id="phone_number" placeholder="ex: 0958213456" 
                maxlength='10' onkeyup='this.value=this.value.replace(/\D/gi,"")'>
            </div>
            <div class="input-area">
                    <label for="twzipcode" class="input-text"><span style="color:red;">*</span>地址：</label>
                    <div id="twzipcode"></div>
                    <input type="text"class="h-75" id="address" placeholder="地址">
            </div>
            <div class="input-area">
                <div class="input-text"><span class='text-danger'>*</span>電子信箱：</div>
                <input type="text" value="{{$data['email'] }}" id = 'email'>
            </div>
            <div class="submit-area" id = 'submit-area'>
                <button type="button" class="btn btn-dark" id="cancel_modify">取消</button>
                <button type="button" class="btn btn-dark" id="confirm_modify">確認更改</button>
            </div>
        </form>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#twzipcode').twzipcode({
        'css': ['country', 'area', 'zipcode'],
        'countyName': 'AccountCountry',
        'districtName': 'AccountArea',
        'zipcodeName': 'AccountZipcode',
    });
});
</script>
@stop

