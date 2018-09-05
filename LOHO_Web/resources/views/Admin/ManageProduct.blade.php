@extends('Layout.master')

@section('title','上傳商品')
@section('head')
<link href="{{ URL::asset('/css/ManageProduct.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('/js/ManageProduct.js') }}"></script>
@stop

@section('content')
<div class = "content">
    <div class="d-flex flex-row justify-content-center">
            <ul>
                <li><h5>目前商品(圖片大小限制為64KB, 格式限制為jpeg、png、bmp、gif、 或 svg)</h5></li>
                <li>商品編號:<input type="text" name="id" id="" value="{{$data['id']}}"><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>
                <li>商品名稱:<input type="text" name="name" id="" value="{{$data['name']}}"><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>
                <li>商品價錢:<input type="text" name="price" id="" value="{{$data['price']}}"><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>
                <li>商品描述:<input type="text" name="description" id="" value="{{$data['description']}}"><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>
                <li>剩餘數量:<input type="text" name="remain_count" id="" value="{{$data['remain_count']}}"><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>
                <li><img src="{{ asset($data['img_url']) }}" height="300" width="300"> 
                    <form enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file" name="file" />
                        <input type="submit" name="submit" value="上傳" />
                        <ul id="status">
                        </ul>
                    </form></li>
            </ul>
</div>

@stop

