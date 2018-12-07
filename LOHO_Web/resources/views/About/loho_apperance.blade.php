@extends('Layout.master')
@section('title','眾人見證')
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
        <li class="breadcrumb-item active" aria-current="page">眾人見證</li>
    </ol>
</nav>
<div class="content">
    <div class="container-block">
        <div class="row">
            <div class="left-block">
                <div class="list-group-block text-JhengHei">
                    <h1 class="my-4 title-color">眾人見證</h1>
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
            <div class="right-block">
                <div class="d-flex flex-row">
                    <img src="{{ URL::asset('/Image/apperance/16.png') }}" alt="">
                    <img src="{{ URL::asset('/Image/apperance/16-3.png') }}" alt="">
                </div>
                <div class="text-block">
                    <p>
                    通過SGS、TTRI國家級除臭認證
                    </p>
                </div>
                <div class="d-flex flex-row">
                    <img src="{{ URL::asset('/Image/apperance/17.jpg') }}" alt="">
                    <img src="{{ URL::asset('/Image/apperance/17-3.jpg') }}" alt="">
                </div>
                <div class="text-block">
                    <p>
                    一條龍MIT作業
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop