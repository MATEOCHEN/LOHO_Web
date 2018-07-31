@extends('Layout.master')
@section('title','商品資訊')
@section('head')
<link href="{{ URL::asset('/css/ShoppingItem.css') }}" rel="stylesheet" type="text/css" />
@stop


@section('content')
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
                <div class="wrap">
                    <div class="item-img-block">
                        <div class="shopping-item-img">
                            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
                        </div>
                    </div>
                    <div class="item-info-block">
                        <div class="item-title">
                            短襪-竹炭休閒襪-黑
                        </div>
                        <div class="price-color">
                            <div class="item-color">
                                <div class="black">

                                </div>
                                <div class="gray">

                                </div>
                                <div class="yellow">

                                </div>
                            </div>
                            <div class="price">
                                NT.110
                            </div>
                        </div>
                        <div class="add-cart">
                            <select name="購物數量" size="1">
                                <option value="one" selected> 1
                                    <option value="two">2
                                        <option value="three">3
                            </select>
                            <button type="button" class="btn btn-dark">加入購物車</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
    </div>
    </div>

@stop