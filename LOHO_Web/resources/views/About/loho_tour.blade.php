@extends('Layout.master')
@section('title','樂活導覽')
@section('head')

<link rel="stylesheet" href="{{ URL::asset('/css/About/loho_history.css') }}">
@stop
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb text-JhengHei">
        <li class="breadcrumb-item">
            <a href="/LOHO_Web/public/">首頁</a>
        </li>
        <li class="breadcrumb-item">
            關於LOHO
        </li>
        <li class="breadcrumb-item">
            樂活足跡
        </li>
        <li class="breadcrumb-item active" aria-current="page">樂活導覽</li>
    </ol>
</nav>
<div class="content">
    <div class="container-block">
        <div class="row">
            <div class="left-block">
                <div class="list-group-block text-JhengHei">
                    <h1 class="my-4 title-color">樂活導覽</h1>
                    <div class="list-group">
                        <div class="row">
                            <a href="#sub_category1" class="list-group-item" id="main_category1" data-toggle="collapse" style="font-size:20px;">樂活足跡</a>
                            <img src="{{ URL::asset('/open-iconic-master/svg/chevron-bottom.svg') }}" alt="">
                        </div>
                        <div class="collapse" id="sub_category1">
                            <a href="{{url::asset('/About/loho_history')}}" class="list-group-item" data-parent="#main_category1" style="padding-left: 40px;">樂活歷史</a>
                            <a href="{{url::asset('/About/loho_location')}}" class="list-group-item" data-parent="#main_category1" style="padding-left: 40px;">樂活據點</a>
                            <a href="{{url::asset('/About/loho_glory')}}" class="list-group-item" data-parent="#main_category1" style="padding-left: 40px;">樂活榮耀</a>
                            <a href="{{url::asset('/About/tour')}}" class="list-group-item" data-parent="#main_category1" style="padding-left: 40px;">樂活導覽</a>
                        </div>
                        <div class="row">
                            <a href="#sub_category2" class="list-group-item" id="main_category2" data-toggle="collapse" style="font-size:20px;" href="#sub_category2">眾人見證</a>
                            <img src="{{ URL::asset('/open-iconic-master/svg/chevron-bottom.svg') }}" alt="">
                        </div>
                        <div class="collapse" id="sub_category2">
                            <a href="{{url::asset('/About/loho_award')}}" class="list-group-item" data-parent="#main_category2" style="padding-left: 40px;">輝煌獎項</a>
                            <a href="{{url::asset('/About/loho_apperance')}}" class="list-group-item" data-parent="#main_category2" style="padding-left: 40px;">眾人見證</a>
                        </div>
                        <div class="row">
                            <a href="#sub_category3" class="list-group-item" id="main_category2" data-toggle="collapse" style="font-size:20px;" href="#sub_category2">媒體報導</a>
                            <img src="{{ URL::asset('/open-iconic-master/svg/chevron-bottom.svg') }}" alt="">
                        </div>
                        <div class="collapse" id="sub_category3">
                            <a href="{{url::asset('/About/loho_magazine')}}" class="list-group-item" data-parent="#main_category3" style="padding-left: 40px;">雜誌專刊</a>
                            <a href="{{url::asset('/About/loho_video')}}" class="list-group-item" data-parent="#main_category3" style="padding-left: 40px;">影音專訪</a>
                            <a href="{{url::asset('/About/loho_netreport')}}" class="list-group-item" data-parent="#main_category3" style="padding-left: 40px;">網路專題</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col right-block">
                <img style="width:70%"src="{{ URL::asset('/Image/tour/S__58793991.jpg') }}" alt="">
                <div class="text-block">
                    <p>
                    樂活導覽時間：整點導覽 (團體請另外預約喔！)
                    </p>
                    <p>
                    停留時間：導覽流程30分鐘+襪子娃娃DIY(30分~180分)+門市選購(30分)
                    </p>
                </div>
                <img src="{{ URL::asset('/Image/tour/59b.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>
@stop