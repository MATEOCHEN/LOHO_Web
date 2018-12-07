@extends('Layout.master')

@section('title','首頁')
@section('head')
<link href="{{ URL::asset('/css/Index.css') }}" rel="stylesheet" type="text/css" />
@if (!Auth::check())
{{-- 傳script需使用!! --}}
{!!$str!!}
@endif
@stop
@section('content')

  <div class="content">
      <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide container-fluid" data-ride="carousel ">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active carousel-h">
              <img class="d-block w-100" src="{{ URL::asset('/Image/loho.webp') }}"
                alt="First slide">
            </div>
            <div class="carousel-item carousel-h">
              <img class="d-block w-100" src="{{ URL::asset('/Image/Happy Halloween.jpg')}}"
                alt="Second slide">
            </div>
            <div class="carousel-item carousel-h">
              <img class="d-block w-100" src="{{ URL::asset('/Image/team Photo.jpg')}}"
                alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
    <div class="text-center border text-JhengHei">
      <h1>商品分類</h1>
    </div>
    <div class="wrap" id="category-block">
      <div class="mr-5 bg-category img-circle">
        <a href="#"><img src="{{ URL::asset('/Image/sock.svg') }}" class="img-fluid"></a>
      </div>
      <div class="mr-5 bg-category img-circle">
        <a href="#"><img src="{{ URL::asset('/Image/shirt.svg') }}" class="img-fluid"></a>
      </div>
      <div class="bg-category img-circle">
        <a href="#"><img src="{{ URL::asset('/Image/kneepad.svg') }}" class="img-fluid"></a>
      </div>
    </div>
    <div>
      <h1 class="text-center text-JhengHei">精選推薦</h1>
    </div>
    <div class="wrap border" id="goods-block">
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" class="img-fluid">
          </div>
          <div>
            <h3 class="text-JhengHei">竹碳運動襪</h3>
          </div>
        </div>
      </div>
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" class="img-fluid">
          </div>
          <div>
            <h3 class="text-JhengHei">竹碳運動襪</h3>
          </div>
        </div>
      </div>
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" class="img-fluid">
          </div>
          <div>
            <h3 class="text-JhengHei">竹碳運動襪</h3>
          </div>
        </div>
      </div>
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" class="img-fluid">
          </div>
          <div>
            <h3 class="img-font text-JhengHei">竹碳運動襪</h3>
          </div>
        </div>
      </div>
    </div>
    <div>
      <h1 class="text-center text-JhengHei">新品上市</h1>
    </div>
    <div class="wrap">
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
          </div>
          <div>
            <h3 class="img-font text-JhengHei">竹碳運動襪</h3>
          </div>
        </div>
      </div>
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
          </div>
          <div>
            <h3 class="img-font text-JhengHei">竹碳運動襪</h3>
          </div>
        </div>
      </div>
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
          </div>
          <div>
            <h3 class="img-font text-JhengHei">竹碳運動襪</h3>
          </div>
        </div>
      </div>
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
          </div>
          <div>
            <h3 class="img-font text-JhengHei">竹碳運動襪</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center  align-items-center">
      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Floho.socks.tourism.factory%2F%3Ffb_dtsg_ag%3DAdxuTU4m6K45LgcYj9BAFkdjIIOcZ97wHCW9Ta7Zm9KzSA%253AAdzmhSdXXD7oVtAOSjQT0vEdhJS6UAvOQL1ljJMTNXR3bQ&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="600" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
    </div>
    <div>
        <img class='w-100 h-auto'src="{{ URL::asset('/Image/LOHO_Index/反詐騙.jpg') }}" alt="">
    </div>
    <div>
      <img class='w-100 h-auto'src="{{ URL::asset('/Image/LOHO_Index/Index_footer(1).jpg') }}" alt="">
    </div>
  </div>
@stop


