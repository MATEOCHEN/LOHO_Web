@extends('Layout.master')
@section('title','樂活據點')
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
        <li class="breadcrumb-item active" aria-current="page">樂活據點</li>
    </ol>
</nav>
<div class="content">
    <div class="container-block">
        <div class="row">
            <div class="left-block">
                <div class="list-group-block text-JhengHei">
                    <h1 class="my-4 title-color">樂活據點</h1>
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
                <div class="text-block">
                    <p>
                    樂活觀光襪廠─中山店。彰化縣社頭鄉中山路一段465號。+8864-8720522
                    </p>
                    <p>
                    樂活時間： 全年無休 9:00AM～6:00PM
                    </p>
                </div>
                <img src="{{ URL::asset('/Image/location/9b.jpg') }}" alt="">
                <div class="text-block">
                    <p>
                    樂活襪之鄉博物館。彰化線社頭鄉社石路559號。+886-48720522
                    </p>
                    <p>
                    樂活時間： 全年無休 9:00AM～6:00PM
                    </p>
                </div>
                <img src="{{ URL::asset('/Image/location/041015_MAP1.jpg') }}" alt="">
                <img src="{{ URL::asset('/Image/location/041015_MAP2.jpg') }}" alt="">
                <iframe width="880" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.8473531654545!2d120.58105331530487!3d23.895030989151884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346934503063fe21%3A0x46e0eb8bda642556!2zNTEx5b2w5YyW57ij56S-6aCt6YSJ5Lit5bGx6Lev5LiA5q61NDY16Jmf!5e0!3m2!1szh-TW!2stw!4v1462937093228" frameborder="0" allowfullscreen="" style="border: 0px currentColor; border-image: none;"></iframe>
            </div>
        </div>
    </div>
</div>
@stop