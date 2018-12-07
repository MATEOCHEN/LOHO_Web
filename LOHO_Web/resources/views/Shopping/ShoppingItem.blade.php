@extends('Layout.master')
@section('title','商品資訊')
@section('head')
<link href="{{ URL::asset('/css/ShoppingItem.css') }}" rel="stylesheet" type="text/css" />
@stop


@section('content')
    <div class="content">
        <div class="container-block">
            
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
                            <p class="price">NT.110</p>
                        </div>
                        <div class="item-desc border border-primary justify-content-between">
                            <div class = "d-flex">
                                <h5>這是個漂亮的襪子</h5>
                            </div>
                            <div class="d-flex  border border-primary align-items-end">
                                <select name="購物數量" size="1">
                                    <option value="one" selected> 1
                                    <option value="two">2
                                    <option value="three">3
                                </select>
                                
                                <input type="button" class="btn btn-addCart" style="height:20%"value="加入購物車">
                            </div>
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