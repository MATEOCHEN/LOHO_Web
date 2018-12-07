@extends('Layout.master')
@section('title','網路專題')
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
        <li class="breadcrumb-item active" aria-current="page">網路專題</li>
    </ol>
</nav>
<div class="content">
    <div class="container-block">
        <div class="row">
            <div class="left-block">
                <div class="list-group-block text-JhengHei">
                    <h1 class="my-4 title-color">網路專題</h1>
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
                <img src="{{ URL::asset('/Image/About/loho_history(1).jpg') }}" alt="">
                <div class="text-block">
                    <p>
                    樂活襪之鄉企業有限公司執行科技研發產品以及文創商品開發時，
                    掌握樂活品牌價值，
                    從創意研發團隊的設計、工廠生產製造、推廣行銷、門市服務及售後服務、品牌價值的傳達等所有價值鏈的串聯是密不可分的，
                    要完整的執行每一個細節，才能為消費者締造優質的消費型態。
                    </p>
                </div>
                <img src="{{ URL::asset('/Image/About/loho_history(2).jpg') }}" alt="">
                <div class="text-block">
                    <ul>
                        <li>設計 設計團隊擁有專業設計背景外，經常做市場調查分析現今產品流行趨勢。</li>
                        <li>製造 堅持使用在地材料生產，嚴格的把關商品品質、近乎苛求的製造標準。</li>
                        <li>檢測 機能性產品送檢SGS、TTRI等試驗單位檢測消臭率、滅菌率、耐水牢度等數據。</li>
                        <li>行銷 揮別傳統行銷，讓消費者看見原料、了解製程，創新體驗行銷模式滿足消費者。</li>
                        <li>服務 親切的客服在第一線推銷在地好品質織品，謹慎的服務每一位顧客。</li>
                        <li>價值 傳遞優質、自然、健康的核心價值，投入功能性環保原料生產，使產品更具高附加價值，並藉由設計注入地方人文特色，<br>傳遞文化價值。</li>
                    </ul>
                </div>
                <img src="{{ URL::asset('/Image/About/loho_history(3).jpg') }}" alt="">
                <div class="text-block">
                    <p>
                    LOHO Hosiery Hometown Enterprise Ltd When implementing technology research and development products and cultural and creative product development, we will grasp the value of the Lohas brand. From the design of the creative R&D team, factory manufacturing, marketing, store service and after-sales service, brand value communication, etc. Inseparable, to complete the implementation of every detail, in order to create a quality consumer style for consumers.
                    Design The design team has a professional design background and often conducts market research to analyze current product trends.
                    Manufacturing Insist on the use of local materials, strict quality control, and almost demanding manufacturing standards.
                    Testing functional products are sent to SGS, TTRI and other test units to detect data such as deodorization rate, sterilization rate and water fastness.
                    Marketing Say goodbye to traditional marketing, let consumers see raw materials, understand processes, and innovate experience marketing models to satisfy consumers.
                    Service Kind customer service sells good quality fabrics in the first line, serving every customer with care.
                    Value Delivers the core values of quality, natural and healthy, and invests in the production of functional environmentally friendly raw materials, which makes the products more value-added, and injects local cultural characteristics through design to convey cultural values.
                    </p>
                </div>
                <img src="{{ URL::asset('/Image/About/loho_history(4).jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>
@stop