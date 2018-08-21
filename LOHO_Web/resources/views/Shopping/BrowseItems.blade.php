@extends('Layout.master')

@section('title','瀏覽商品')
@section('head')
<link href="{{ URL::asset('/css/Shopping.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('/js/jquery-3.3.1.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#item').click(function (e) { 
            alert("click");
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });

            $.ajax({
                type: "POST",
                url: "addCart",
                data: {item : '竹炭襪'},
                dataType: "json",
                success: function (response) {
                    alert(response.item);
                }
            });
        });
        
    });
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
                    <li class="shopping-item-block ">
                        <div class="shopping-item-img">
                            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
                        </div>
                        <div>
                            <h5>竹炭休閒襪-黑</h5>
                            <h5>NT$240</h5>
                            <p>耐用好穿</p>
                            <select name="選單名稱" size="1">
                                <option value="one" selected> 1
                                    <option value="two">2
                                        <option value="three">3
                            </select>
                            <button type="button" id = "item" class="btn btn-outline-dark btn-sm">加入購物車</button>
                        </div>
                    </li>
                    <li class="shopping-item-block ">
                        <div class="shopping-item-img">
                            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
                        </div>
                        <div>
                            <h5>竹炭休閒襪-黑</h5>
                            <h5>NT$240</h5>
                            <p>耐用好穿</p>
                            <select name="選單名稱" size="1">
                                <option value="one" selected> 1
                                    <option value="two">2
                                        <option value="three">3
                            </select>
                            <button type="button" class="btn btn-outline-dark btn-sm">加入購物車</button>
                        </div>
                    </li>
                    <li class="shopping-item-block ">
                        <div class="shopping-item-img">
                            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
                        </div>
                        <div>
                            <h5>竹炭休閒襪-黑</h5>
                            <h5>NT$240</h5>
                            <p>耐用好穿</p>
                            <select name="選單名稱" size="1">
                                <option value="one" selected> 1
                                    <option value="two">2
                                        <option value="three">3
                            </select>
                            <button type="button" class="btn btn-outline-dark btn-sm">加入購物車</button>
                        </div>
                    </li>
                    <li class="shopping-item-block ">
                        <div class="shopping-item-img">
                            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
                        </div>
                        <div>
                            <h5>竹炭休閒襪-黑</h5>
                            <h5>NT$240</h5>
                            <p>耐用好穿</p>
                            <select name="選單名稱" size="1">
                                <option value="one" selected> 1
                                    <option value="two">2
                                        <option value="three">3
                            </select>
                            <button type="button" class="btn btn-outline-dark btn-sm">加入購物車</button>
                        </div>
                    </li>
                    <li class="shopping-item-block ">
                        <div class="shopping-item-img">
                            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
                        </div>
                        <div>
                            <h5>竹炭休閒襪-黑</h5>
                            <h5>NT$240</h5>
                            <p>耐用好穿</p>
                            <select name="選單名稱" size="1">
                                <option value="one" selected> 1
                                    <option value="two">2
                                        <option value="three">3
                            </select>
                            <button type="button" class="btn btn-outline-dark btn-sm">加入購物車</button>
                        </div>
                    </li>
                    <li class="shopping-item-block ">
                        <div class="shopping-item-img">
                            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
                        </div>
                        <div>
                            <h5>竹炭休閒襪-黑</h5>
                            <h5>NT$240</h5>
                            <p>耐用好穿</p>
                            <select name="選單名稱" size="1">
                                <option value="one" selected> 1
                                    <option value="two">2
                                        <option value="three">3
                            </select>
                            <button type="button" class="btn btn-outline-dark btn-sm">加入購物車</button>
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
