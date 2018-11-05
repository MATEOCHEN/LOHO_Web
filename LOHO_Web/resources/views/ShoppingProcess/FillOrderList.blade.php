@extends('Layout.master') 
@section('title','我的購物車') 
@section('head')
<link href="{{ URL::asset('css/FillOrderList.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('js/Shopping/jquery.twzipcode.min.js')}}"></script>
<style>
.zipcode {
    margin-left :5px;
    width :75px;
}
.country {
    height : 30px;
    font-size : 16px;
}
.area{
    height : 30px;
}

.address {
    margin-left : 5px;
    height : 30px;
    width : 280px;
}

</style>
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
            <div class="list">
                <div class="col align-self-end">
                    <div class="row">
                        <h3 class="pt-3 ml-3">訂購人資料</h3>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <label for="ordererName" class="col-form-label">姓名：</label> 
                            <input type="text" class="" id="ordererName">
                        </div>
                        <div class="col-5">
                            <label for="ordererEmail" class="col-form-label">E-mail：</label> 
                            <input type="text" class="" id="ordererEmail">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <label for="ordererTEL" class="col-form-label">電話：</label> 
                            <input type="text" class="" id="ordererTEL">
                        </div>
                        <div class="col-5">
                            <label for="ordererPhone" class="col-form-label ">手機：</label> 
                            <input type="text" class="" id="ordererPhone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex flex-row mt-3">
                            <label for="twzipcode" class="col-form-label ml-3">地址：</label>
                            <div id="twzipcode"></div>
                            <input type="text" class="address" id="address" placeholder="地址">
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="pt-3 ml-3">收件人資料</h3>                     
                        <div class="ml-5 pt-4 align-self-end">
                                <input class="form-check-input" type="checkbox"  id="defaultCheck">
                                <label class="form-check-label" for="defaultCheck">同訂購人資料</label> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <label for="RecipientName" class="col-form-label">姓名：</label> 
                            <input type="text" class="" id="RecipientName">
                        </div>
                        <div class="col-5">
                            <label for="RecipientEmail" class="col-form-label">E-mail：</label> 
                            <input type="text" class="" id="RecipientEmail">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <label for="RecipientTEL" class="col-form-label">電話：</label> 
                            <input type="text" class="" id="RecipientTEL">
                        </div>
                        <div class="col-5">
                            <label for="RecipientPhone" class="col-form-label ">手機：</label> 
                            <input type="text" class="" id="RecipientPhone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex flex-row mt-3">
                            <label for="twzipcode1" class="col-form-label ml-3">地址：</label>
                            <div id="twzipcode1"></div>
                            <input type="text" class="address" id="address1" placeholder="地址">
                        </div>                     
                    </div>
                    <div class="d-flex justify-content-center pt-3">
                        <button type="button" id="last_step"class="btn btn-secondary mr-5">上一步</button>
                        <button type="button" id="next_step" class="btn btn-secondary">下一步</button>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#next_step').click(function (e) { 
        e.preventDefault();
        window.location = "CheckoutList";
        });

        $('#last_step').click(function (e) { 
            e.preventDefault();
            window.location = "ConfirmShoppingList"; 
        });   

        $('#twzipcode').twzipcode({
            'css':['country','area','zipcode'],
            'countyName': 'OrdererCountry',
            'districtName' :'OrdererArea',
            'zipcodeName':'OrdererZipcode'
        });
        $('#twzipcode1').twzipcode({
            'css':['country','area','zipcode'],
            'countyName': 'RecipientCountry',
            'districtName' :'RecipientArea',
            'zipcodeName':'RecipientZipcode'
        });
        checkBox_clicked();
    });

    function checkBox_clicked() {
        $('#defaultCheck').change(function(){
            OrdererName = $("#ordererName").val();
            OrdererEmail = $("#ordererEmail").val();
            OrdererTEL = $("#ordererTEL").val();
            OrdererPhone = $("#ordererPhone").val();
            Country = $("select[name='OrdererCountry']").val();
            Area = $("select[name='OrdererArea']").val();
            ZipCode = $("input[name='OrdererZipcode']").val();
            Address = $("#address").val();
            if($('#defaultCheck').prop("checked")){
                $("#RecipientName").val(OrdererName);
                $("#RecipientEmail").val(OrdererEmail);
                $("#RecipientTEL").val(OrdererTEL);
                $("#RecipientPhone").val(OrdererPhone);
                $("select[name='RecipientCountry']").val(Country);
                fire_event();
                $("select[name='RecipientArea']").val(Area);
                $("input[name='RecipientZipcode']").val(ZipCode);
                $("#address1").val(Address);    
            } else {
                $("#RecipientName").val("");
                $("#RecipientEmail").val("");
                $("#RecipientTEL").val("");
                $("#RecipientPhone").val("");
                $("select[name='RecipientCountry']").val("")
                fire_event();
                $("select[name='RecipientArea']").val("");
                $("input[name='RecipientZipcode']").val("");
                $("#address1").val("")
            }
        })
    }

    function fire_event() {
        var event = new Event('change');
        var d =document.getElementsByName("RecipientCountry")[0];
        d.addEventListener('event',function() {
            alert("123");
        });
        d.dispatchEvent(event);
    }
</script>
@stop


