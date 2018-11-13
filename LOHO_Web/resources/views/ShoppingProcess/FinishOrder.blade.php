@extends('Layout.master') 
@section('title','我的購物車') 
@section('head')
<link href="{{ URL::asset('css/FinishOrder.css') }}" rel="stylesheet" type="text/css" />
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
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.5 完成訂單</p></div>
            </div>
            <div class="container">
                <div class="finish-block col-8 justify-content-center">
                    恭喜你完成訂單
                </div>
            </div>
            <div class="next">
                <button class="button btn btn-secondary" id="back_index">回官網</button>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function () {
    $('#back_index').click(function (e) { 
    e.preventDefault();
    window.location = "/LOHO_Web/public/"; 
});
});

</script>
@stop
