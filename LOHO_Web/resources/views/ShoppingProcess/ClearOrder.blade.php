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
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.4 確認訂單</p></div>
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.5 完成訂單</p></div>
            </div>
            <div class="col">
                <h3 class="ml-3">訂購人資料</h3>
                    <div class = "row">
                        <p class="ml-5">姓名:<span id="ordererName"></span></p>
                        <p class="ml-5">Email: stezen129@gmail.com</p>
                    </div>
                    <div class = "row">
                        <p class="ml-5">電話: 02-82654635</p>
                        <p class="ml-5">手機: 0958803567</p>
                    </div>
                <p class="ml-4">地址: 雲林縣斗六市大學路一段123號</p>
                <h3 class="ml-3">收件人資料</h3>
                <div class = "row">
                        <p class="ml-5">姓名:陳孟軒</p>
                        <p class="ml-5">Email: stezen129@gmail.com</p>
                    </div>
                    <div class = "row">
                        <p class="ml-5">電話: 02-82654635</p>
                        <p class="ml-5">手機: 0958803567</p>
                    </div>
                <h3 class="ml-3">付款方式:信用卡</h3>
            </div>
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
    window.location = "FinishOrder"; 
});
</script>
@stop