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
            <h1>訂單進度</h1>
            <div class="progress" style="height: 30px">
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.1 確認商品</p></div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.2 填寫資料</p></div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.3 付款方式</p></div>
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.4 確認訂單</p></div>
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.5 完成訂單</p></div>
            </div>
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