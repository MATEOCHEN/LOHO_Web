@extends('Layout.master')

@section('title','瀏覽商品')
@section('head')
<link href="{{ URL::asset('/css/Shopping.css') }}" rel="stylesheet" type="text/css" />


<script> 
    function addCart(item_id) {
        let item_id_cart = item_id;
        var item_id = '#' + item_id;
        $(document).ready(function () {
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            
            let item_name = $(item_id).children("div.text").children("h5.name").text();
            let item_price = $(item_id).children("div.text").children("h5.price").text();
            let item_count = $(item_id).children("div.text").children("select").val();
            let item_img_url = $(item_id).children("div.shopping-item-img").children("img").attr('src');
            item_price = item_price.slice(3);
            $.ajax({
                type: "POST",
                url: "addCart",
                data: {item_id : item_id_cart,item_name : item_name,item_price : item_price,item_count : item_count,item_img_url:item_img_url},
                dataType: "json",
                success: function (response) {
                    let item = response.item;
                    alert("加入 " + item.id + " "+item.name +" NT$"+item.price+" "+item.count+"雙" + item_img_url);
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
                <a href="/LOHO_Web/public/">首頁</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">精選主題</a>
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
                        <a href="#sub_category1" class="list-group-item" id="main_category1" data-toggle="collapse" style="font-size:20px;">男款</a>
                        <div class="collapse list-group-submenu" id="sub_category1">
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category1" style="padding-left: 40px;">抗臭機能襪</a>
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category1" style="padding-left: 40px;">抗菌機能襪</a>
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category1" style="padding-left: 40px;">抗癬機能襪</a>
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category1" style="padding-left: 40px;">竹炭休閒襪</a>
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category1" style="padding-left: 40px;">天然棉襪</a>
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category1" style="padding-left: 40px;">甲殼素襪</a>
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category1" style="padding-left: 40px;">銀纖維襪</a>
                        </div>
                        <a href="#sub_category2" class="list-group-item" id="main_category2" data-toggle="collapse" style="font-size:20px;" href="#sub_category2">女款</a>
                        <div class="collapse list-group-submenu" id="sub_category2">
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category2" style="padding-left: 40px;">抗臭機能襪</a>
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category2" style="padding-left: 40px;">抗菌機能襪</a>
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category2" style="padding-left: 40px;">抗癬機能襪</a>
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category2" style="padding-left: 40px;">竹炭休閒襪</a>
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category2" style="padding-left: 40px;">天然棉襪</a>
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category2" style="padding-left: 40px;">甲殼素襪</a>
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category2" style="padding-left: 40px;">美膚褲襪</a>
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category2" style="padding-left: 40px;">隱形襪</a>
                        </div>
                        <a href="#sub_category3" class="list-group-item" id="main_category3" data-toggle="collapse" style="font-size:20px;" href="#sub_category3">兒童</a>
                        <div class="collapse list-group-submenu" id="sub_category3">
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category3" style="padding-left: 40px;">兒童休閒襪</a>
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category3" style="padding-left: 40px;">兒童竹炭襪</a>
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category3" style="padding-left: 40px;">樂活親子襪</a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <ul class="wrap text-center" id="item_list">
                    <li class="shopping-item-block " id="s001">
                        <div class="shopping-item-img">
                            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
                        </div>
                        <div class="text">
                            <h5 class="name" id = "name">竹炭休閒襪-黑</h5>
                            <h5 class="price">NT$240</h5>
                            <p class="description">耐用好穿</p>
                            <select name="選單名稱" size="1">
                                <option value="1" selected> 1
                                    <option value="2">2
                                        <option value="3">3
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
                                <option value="1" selected> 1
                                    <option value="2">2
                                        <option value="3">3
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
                                <option value="1" selected> 1
                                    <option value="2">2
                                        <option value="3">3
                            </select>
                            <button type="button" class="btn btn-outline-dark btn-sm" onclick="addCart('s003')">加入購物車</button>
                        </div>
                    </li>
                    @foreach ($data['items'] as $item)
                        @include('Shopping.RecommendationItems')
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
@stop
