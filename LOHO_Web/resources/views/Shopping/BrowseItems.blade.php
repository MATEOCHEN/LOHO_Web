@extends('Layout.master')

@section('title','瀏覽商品')
@section('head')
<link href="{{ URL::asset('/css/Shopping.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('/js/jquery-3.3.1.min.js') }}"></script>
<script>
    function addCart(item_id) {
        var item_id = '#' + item_id;
        $(document).ready(function () {
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            let item_name = $(item_id).children("div.text").children("h5.name").text();
            let item_price = $(item_id).children("div.text").children("h5.price").text();

            $.ajax({
                type: "POST",
                url: "addCart",
                data: {item_name : item_name,item_price : item_price},
                dataType: "json",
                success: function (response) {
                    alert(response.item_name +" "+response.item_price);
                }
            });
    });
    }

</script>
@stop

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Library</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
    </nav>
    <div class="content">
        <div class="container-block">
            <div class="left">
                <div class="list-group-block">
                    <h1 class="my-4">新品上市</h1>
                    <div class="list-group">
                        <a href="#" class="list-group-item">Category 1</a>
                        <a href="#" class="list-group-item">Category 2</a>
                        <a href="#" class="list-group-item">Category 3</a>
                    </div>
                </div>
            </div>
            <div class="right">
                <ul class="wrap text-center">
                    <li class="shopping-item-block " id="s001">
                        <div class="shopping-item-img">
                            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
                        </div>
                        <div class="text">
                            <h5 class="name" id = "name">竹炭休閒襪-黑</h5>
                            <h5 class="price">NT$240</h5>
                            <p class="description">耐用好穿</p>
                            <select name="選單名稱" size="1">
                                <option value="one" selected> 1
                                    <option value="two">2
                                        <option value="three">3
                            </select>
                            <button type="button" class="btn btn-outline-dark btn-sm" onclick="addCart('s001')">加入購物車</button>
                        </div>
                    </li>
                    <li class="shopping-item-block " id="s002">
                        <div class="shopping-item-img">
                            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
                        </div>
                        <div class="text">
                            <h5 class="name" id = "name">竹炭休閒襪-紅</h5>
                            <h5 class="price">NT$240</h5>
                            <p class="description">耐用好穿</p>
                            <select name="選單名稱" size="1">
                                <option value="one" selected> 1
                                    <option value="two">2
                                        <option value="three">3
                            </select>
                            <button type="button" class="btn btn-outline-dark btn-sm" onclick="addCart('s002')">加入購物車</button>
                        </div>
                    </li>
                    <li class="shopping-item-block " id="s003">
                        <div class="shopping-item-img">
                            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
                        </div>
                        <div class="text">
                            <h5 class="name" id = "name">竹炭休閒襪-白</h5>
                            <h5 class="price">NT$240</h5>
                            <p class="description">耐用好穿</p>
                            <select name="選單名稱" size="1">
                                <option value="one" selected> 1
                                    <option value="two">2
                                        <option value="three">3
                            </select>
                            <button type="button" class="btn btn-outline-dark btn-sm" onclick="addCart('s003')">加入購物車</button>
                        </div>
                    </li>
                    <li class="shopping-item-block " id="s004">
                        <div class="shopping-item-img">
                            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
                        </div>
                        <div class="text">
                            <h5 class="name" id = "name">竹炭休閒襪-黃</h5>
                            <h5 class="price">NT$240</h5>
                            <p class="description">耐用好穿</p>
                            <select name="選單名稱" size="1">
                                <option value="one" selected> 1
                                    <option value="two">2
                                        <option value="three">3
                            </select>
                            <button type="button" class="btn btn-outline-dark btn-sm" onclick="addCart('s004')">加入購物車</button>
                        </div>
                    </li>
                    <li class="shopping-item-block " id="s005">
                        <div class="shopping-item-img">
                            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
                        </div>
                        <div class="text">
                            <h5 class="name" id = "name">竹炭休閒襪-藍</h5>
                            <h5 class="price">NT$240</h5>
                            <p class="description">耐用好穿</p>
                            <select name="選單名稱" size="1">
                                <option value="one" selected> 1
                                    <option value="two">2
                                        <option value="three">3
                            </select>
                            <button type="button" class="btn btn-outline-dark btn-sm" onclick="addCart('s005')">加入購物車</button>
                        </div>
                    </li>
                    <li class="shopping-item-block " id="s006">
                        <div class="shopping-item-img">
                            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
                        </div>
                        <div class="text">
                            <h5 class="name" id = "name">竹炭休閒襪-綠</h5>
                            <h5 class="price">NT$240</h5>
                            <p class="description">耐用好穿</p>
                            <select name="選單名稱" size="1">
                                <option value="one" selected> 1
                                    <option value="two">2
                                        <option value="three">3
                            </select>
                            <button type="button" class="btn btn-outline-dark btn-sm" onclick="addCart('s006')">加入購物車</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    </div>
    </div>
    </div>
@stop
