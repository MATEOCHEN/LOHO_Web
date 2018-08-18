@extends('Layout.master')

@section('title','首頁')
@section('head')
<link href="{{ URL::asset('/css/Index.css') }}" rel="stylesheet" type="text/css" />
@stop
@section('content')

  <div class="content">
    <div class="container-fluid py-5">
      <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide container-fluid" data-ride="carousel ">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100 img-fluid" src="https://images.unsplash.com/photo-1518023176010-e14eb57eecf9?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=fe2f72ca42e6478bc869b8325881fa46&auto=format&fit=crop&w=1050&q=80"
                alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-fluid" src="https://images.unsplash.com/photo-1518023176010-e14eb57eecf9?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=fe2f72ca42e6478bc869b8325881fa46&auto=format&fit=crop&w=1050&q=80"
                alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-fluid" src="https://images.unsplash.com/photo-1518023176010-e14eb57eecf9?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=fe2f72ca42e6478bc869b8325881fa46&auto=format&fit=crop&w=1050&q=80"
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
    </div>
    <div>
      <h1 class="text-center">精選推薦</h1>
    </div>
    <div class="wrap">
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" class="img-fluid">
          </div>
          <div>
            <h3 class="img-font">竹碳運動襪</h3>
          </div>
        </div>
      </div>
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" class="img-fluid">
          </div>
          <div>
            <h3 class="img-font">竹碳運動襪</h3>
          </div>
        </div>
      </div>
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" class="img-fluid">
          </div>
          <div>
            <h3 class="img-font">竹碳運動襪</h3>
          </div>
        </div>
      </div>
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" class="img-fluid">
          </div>
          <div>
            <h3 class="img-font">竹碳運動襪</h3>
          </div>
        </div>
      </div>
    </div>
    <div>
      <h1 class="text-center">新品上市</h1>
    </div>
    <div class="wrap">
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
          </div>
          <div>
            <h3 class="img-font">竹碳運動襪</h3>
          </div>
        </div>
      </div>
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
          </div>
          <div>
            <h3 class="img-font">竹碳運動襪</h3>
          </div>
        </div>
      </div>
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
          </div>
          <div>
            <h3 class="img-font">竹碳運動襪</h3>
          </div>
        </div>
      </div>
      <div class="item-block">
        <div class="d-flex flex-column align-items-center">
          <div class="item-img">
            <img src="{{ URL::asset('/Image/竹碳運動襪.jpg') }}" alt="竹碳運動襪" class="img-fluid">
          </div>
          <div>
            <h3 class="img-font">竹碳運動襪</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  @if (!Auth::check())
        {{-- 傳script需使用!! --}}
        {!!$str!!}
  @endif

@stop


