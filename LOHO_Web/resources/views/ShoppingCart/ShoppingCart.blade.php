@extends('Layout.master') 
@section('title','我的購物車') 
@section('head')
<link href="{{ URL::asset('scss/bootstrap.css') }}" rel="stylesheet" type="text/css" />

@stop
@section('content')
<div class="content">
    <body>
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h1 class="text-center p-3 mt-1">LOHO 您的購物車</h1>
        <div class="container-fluid  p-2 mt-4">
            <div class="row solid-bottom-border">
                <div class="col-6 ml-2 text-center">
                    <h4 class="font-weight-bold">商品名稱</h4>
                </div>
                <div class="col text-center">
                    <h4 class="font-weight-bold">數量</h4>
                </div>
                <div class="col text-center">
                    <h4 class="font-weight-bold">小計</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-6 p-4 ml-2 text-left">
                    <div class="row">
                        <div class="col text-left">
                            <p>{{$item_data['item_name']}}</p>
                        </div>
                        <p class="text-danger mr-2" id = "price">{{$item_data['item_price']}} </p>
                        <img src="{{ URL::asset('svg/rubbish-bin.svg') }}" alt="圖片更新中" width="25px" height="25px">
                    </div>
                    <img src="" alt="圖片更新中" class="img-thumbnail">
                </div>
                <div class="col p-4 text-center">
                    <input type="number" placeholder={{$item_data[ 'item_count']}} id="quantity" min={{$item_data[ 'item_count']}}>
                </div>
                <div class="col p-4 text-center">
                    <h5 class="text-danger" id="subtotal">{{$item_data['item_total']}}</h5>
                </div>
            </div>
        </div>
        <div class="alert alert-secondary" role="alert">
            <div class="row">
                共{{$item_data['item_count']}}項商品，金額總計
                <p class="text-danger" id="total">{{$item_data['item_total']}}</p>元
            </div>
        </div>
    </body>
</div>
<script>
    $(document).ready(function () {
        let price = $('#price').text();
        let quantity = document.getElementById("quantity").value;
        alert(quantity);
    });
</script>
<script>
    /*
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let item_name = '沒有商品'；
        let item_price = '沒有價錢';
        let item_count = '沒有數量';
        $.ajax({
            type: "GET",
            url: "/LOHO_Web/public/Shopping/getCart",
            data: "",
            dataType: "json",
            success: function (response) {
                item_name = response.item_name;
                item_price = response.item_price;
                item_count = response.item_count;;
            }
        });
            var x = document.getElementById("quantity").value;
            document.getElementById("subtotal").innerHTML = x * item_price;
            document.getElementById("total").innerHTML = x * item_price;

    });*/

    /*
    document.getElementById("quantity").addEventListener("click",
        function calculateSum() {
            var x = document.getElementById("quantity").value;
            document.getElementById("subtotal").innerHTML = x * item_price;
            document.getElementById("total").innerHTML = x * item_price;
        })*/

</script>
@stop



