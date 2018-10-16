@extends('Layout.master') 
@section('title','我的購物車') 
@section('head')
<link href="{{ URL::asset('css/CheckoutList.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />

@stop
@section('content')
<div class="content">
    <div class="outer">
        <div class="wrap">
            付款方式
            <form class="form form-group">
                <div class="option form-check">
                    <input class="form-check-input" type="radio" name="pay" id="radio1" value="1">
                    <label class="form-check-label" for="radio1">ATM轉帳</label>
                </div>
                <div class="option form-check">                   
                    <input class="form-check-input" type="radio" name="pay" id="radio2" value="2">
                    <label class="form-check-label" for="radio2">銀行匯款</label>
                </div>
                <div class="option form-check">
                    <input class="form-check-input" type="radio" name="pay" id="radio3" value="3">
                    <label class="form-check-label" for="radio3">貨到付款</label>
                </div>
                <div class="option form-check">
                    <input class="form-check-input" type="radio" name="pay" id="radio4" value="4">
                    <label class="form-check-label" for="radio4">信用卡線上付款</label>
                </div>
            </form>
            <div class="next">
                <button class="button btn btn-secondary" onclick="">繼續購物</button>
                <button class="button btn btn-secondary" id="next_step">下一步</button>
            </div>
        </div>
    </div>
</div>
<script>
$('#next_step').click(function (e) { 
    e.preventDefault();
    window.location = ""; 
});
</script>
@stop