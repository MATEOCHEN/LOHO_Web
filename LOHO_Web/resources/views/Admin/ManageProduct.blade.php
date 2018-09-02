@extends('Layout.master')

@section('title','上傳商品')
@section('head')
<link href="" rel="stylesheet" type="text/css" />
@stop


@section('content')
<div class = "content">

    <div class="d-flex flex-row justify-content-center">
            <div>
                <h5>目前商品(圖片大小限制為64KB, 格式限制為jpeg、png、bmp、gif、 或 svg)</h5>
                <div>商品編號:{{$data['id']}}</div>
                <div>商品名稱:{{$data['name']}}</div>
                <div>商品編號:{{$data['price']}}</div>
                <div>商品描述:{{$data['description']}}</div>
                <div>剩餘數量:{{$data['remain_count']}}</div>
                <img src="{{ asset($data['img_url']) }}" height="300" width="300"> 
                    <form method="post" enctype="multipart/form-data" action="/LOHO_Web/public/upload">
                        {{ csrf_field() }}
                        <input type="file" name="file" />
                        <input type="submit" name="submit" value="上傳" />
                        @foreach ($errors->all() as $error)
                            <ul><li>{{ $error }}</li></ul>  
                        @endforeach
                    </form>
            </div>
</div>

@stop

