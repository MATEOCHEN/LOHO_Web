@extends('Layout.master')

@section('title','瀏覽商品')
@section('head')
<link href="{{ URL::asset('/css/Shopping.css') }}" rel="stylesheet" type="text/css" />


<script> 
    function addCart(item_id) {
        let item_id_cart = item_id;
        var item_id = '#' + item_id;
        let item_name = $(item_id).children("div.text").children("h5.name").text();
        let item_price = $(item_id).children("div.text").children("h5.price").text();
        let item_count = $(item_id).children("div.text").children("select").val();
        let item_img_url = $(item_id).children("div.shopping-item-img").children("img").attr('src');
        item_price = item_price.slice(3);
        
        $(document).ready(function () {
            if(item_count == 'quantity') {
                alert("請選擇確切數量!!");
            } else {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });
                $.ajax({
                    type: "POST",
                    url: "addCart",
                    data: {item_id : item_id_cart,item_name : item_name,item_price : item_price,item_count : item_count,item_img_url:item_img_url},
                    dataType: "json",
                    success: function (response) {
                            let item = response.item;
                            alert("加入 "+item_count+"雙"+item.name);
                    }
                });
            }
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
            <li class="breadcrumb-item active" aria-current="page">新品上市</li>
        </ol>
    </nav>
    <div class="content">
        <div class="container-block">
            <div class="left">
                <div class="list-group-block text-JhengHei">
                    <h1 class="my-4 title-color">新品上市</h1>
                    <div class="list-group">
                        <div class="row">
                            <a href="#sub_category1" class="list-group-item" id="main_category1" data-toggle="collapse" style="font-size:20px;">成人</a>
                            <a href="#sub_category1" class="pt-3"data-toggle="collapse"><img src="{{ URL::asset('/open-iconic-master/svg/chevron-bottom.svg')}}" alt=""></a>
                        </div>
                        <div class="collapse list-group-submenu" id="sub_category1">
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category1" style="padding-left: 40px;">抗臭機能襪</a>
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category1" style="padding-left: 40px;">抗菌機能襪</a>
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category1" style="padding-left: 40px;">抗癬機能襪</a>
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category1" style="padding-left: 40px;">竹炭休閒襪</a>
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category1" style="padding-left: 40px;">天然棉襪</a>
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category1" style="padding-left: 40px;">甲殼素襪</a>
                            <a href="#" class="list-group-item list-group-item-light" data-parent="#main_category1" style="padding-left: 40px;">銀纖維襪</a>
                        </div>
                        <div class="row">
                            <a href="#sub_category2" class="list-group-item" id="main_category2" data-toggle="collapse" style="font-size:20px;" href="#sub_category2">兒童</a>
                            <a href="#sub_category2" class="pt-3"data-toggle="collapse"><img src="{{ URL::asset('/open-iconic-master/svg/chevron-bottom.svg')}}" alt=""></a>
                        </div>
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
                        <div class="row">
                            <a href="#sub_category3" class="list-group-item" id="main_category2" data-toggle="collapse" style="font-size:20px;" href="#sub_category3">親子</a>
                            <a href="#sub_category3" class="pt-3"data-toggle="collapse"><img src="{{ URL::asset('/open-iconic-master/svg/chevron-bottom.svg')}}" alt=""></a>
                        </div>
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
