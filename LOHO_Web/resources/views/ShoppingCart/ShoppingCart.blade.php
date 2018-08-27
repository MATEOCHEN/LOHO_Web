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
                            <p id="name">{{$item_data['item_name']}}</p>
                        </div>
                        <p class="text-danger mr-2" id = "price">{{$item_data['item_price']}} </p>
                        <img src="{{ URL::asset('svg/rubbish-bin.svg') }}" alt="圖片更新中" width="25px" height="25px" style="cursor: pointer;" id = "deleteItem">
                    </div>
                    <img src="" alt="圖片更新中" class="img-thumbnail">
                </div>
                <div class="col p-4 text-center">
                    <input type="number" value={{$item_data[ 'item_count']}} placeholder={{$item_data[ 'item_count']}} min = 1 id="quantity">
                </div>
                <div class="col p-4 text-center">
                    <h5 class="text-danger" id="subtotal"></h5>
                </div>
            </div>
        </div>
        <div class="alert alert-secondary" role="alert">
            <div class="row">
                共<span id = count>{{$item_data['item_count']}}</span>項商品，金額總計
                <p class="text-danger" id="total"></p>元
            </div>
        </div>
    </body>
</div>
<script>
            $(document).ready(function () {
                alert("您的商品");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });

            $.ajax({
                type: "GET",
                url: "/LOHO_Web/public/Shopping/getCart",
                data: "",
                dataType: "json",
                success: function (response) {
                    response.items.forEach(item => {
                        alert(item.name +" NT$"+ item.price+"元"+ item.count+ "雙");
                    });
                }
            });
            });
        
    $(document).ready(function () {
        
        let initial_name = $('#name').text();
        let initial_price = $('#price').text();
        let initial_quantity = parseInt(document.getElementById("quantity").value);
        let initial_total = initial_price * initial_quantity;

        setTotalandCount(initial_quantity,initial_total);

        $("#quantity").on("change",function(event){
            let click_count = parseInt(document.getElementById("quantity").value);

            if(click_count < 1){
                document.getElementById("quantity").value = 1;
                click_count = parseInt(document.getElementById("quantity").value);
            }
            let click_price = $('#price').text();
            let click_total = click_price * click_count;
            setTotalandCount(initial_quantity,click_total);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "updateCart",
                data: {item_name : initial_name,item_count : click_count},
                dataType: "json",
                success: function (response) {
                    let item = response.item;
                    alert("更改數量" + item.name +" "+item.count+"雙");
                }
            });
        });

        $('#deleteItem').click(function (e) { 
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            $.ajax({
                type: "POST",
                url: "deleteCart",
                data: {item_name : initial_name},
                dataType: "json",
                success: function (response) {
                    let item = response.item;
                    alert("刪除" + item.name);
                }
            });
        });
        });

    function changeData() {

    }
    function setTotalandCount(total_count,total_sum) {
        $('#subtotal').text(total_sum);
        $('#total').text(total_sum);
        $('#count').text(total_count);
    }
</script>
@stop



