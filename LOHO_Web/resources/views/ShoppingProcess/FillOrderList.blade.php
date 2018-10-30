@extends('Layout.master') 
@section('title','我的購物車') 
@section('head')
<link href="{{ URL::asset('css/FillOrderList.css') }}" rel="stylesheet" type="text/css" />


@stop
@section('content')
<div class="content">
    <div class="outer">
        <div class="wrap">
            <h1>訂單進度</h1>
            <div class="progress" style="height: 30px">
            <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.1 確認商品</p></div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.2 填寫資料</p></div>
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.3 付款方式</p></div>
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.4 確認訂單</p></div>
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.5 完成訂單</p></div>
            </div>
            <form class="outer form-group" action="" method="">
                <div class="wrap form-check">
                    <div class="input-area">訂購人資料</div>
                    <div class="input-area">
                        <div class="input-text">
                            姓名：
                            <input type="text" name = "name">
                        </div>
                        <div class="input-text">
                            Email：
                            <input type="text" name = "email">
                        </div>
                    </div>
                    <div class="input-area">
                        <div class="input-text">
                            電話：
                            <input type="text" name = "telphone">
                        </div>
                        <div class="input-text">
                            手機：
                            <input type="text" name = "selphone">
                        </div>
                    </div>
                    <div class="input-area">
                        <div class="input-text">
                            郵遞區號：
                            <input type="text" name = "number">
                        </div>
                        <div class="input-text">
                            地址：
                            <input type="text" name = "address">
                        </div>
                    </div>

                    <div class="input-area form-check">
                            收件人資料
                            <input type="checkbox" name="" id="radio" value="">
                            <label class="form-check-label" for="radio">同訂購人資料</label>
                    </div>
                    <div class="input-area">
                        <div class="input-text">
                            姓名：
                            <input type="text" name = "name">
                        </div>
                        <div class="input-text">
                            Email：
                            <input type="text" name = "email">
                        </div>
                    </div>
                    <div class="input-area">
                        <div class="input-text">
                            電話：
                            <input type="text" name = "telphone">
                        </div>
                        <div class="input-text">
                            手機：
                            <input type="text" name = "selphone">
                        </div>
                    </div>
                    <div class="input-area">
                        <div class="input-text">
                            郵遞區號：
                            <input type="text" name = "number">
                        </div>
                        <div class="input-text">
                            地址：
                            <input type="text" name = "address">
                        </div>
                    </div>
                    <div class="next">
                        <button class="button btn btn-secondary" onclick="">繼續購物</button>
                        <button class="button btn btn-secondary" id="next_step">下一步</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('#next_step').click(function (e) { 
        e.preventDefault();
        window.location = "CheckoutList";
    });
</script>
@stop