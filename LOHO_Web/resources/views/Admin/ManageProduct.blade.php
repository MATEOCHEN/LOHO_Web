@extends('Layout.master')

@section('title','上傳商品')
@section('head')
<link href="{{ URL::asset('/css/ManageProduct.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('/js/ManageProduct.js') }}"></script>
@stop

@section('content')
<div class = "content">

        <div class="d-flex flex-row align-items-center flex-wrap" id = "wrap">
            @foreach ($data['items'] as $item)
                    @include('Admin.ItemArea')
            @endforeach 
        </div>
        <div style="text-align:center">
            <input type="button" class="btn btn-dark btn-sm modify" value="新增商品" id="addItem">
        </div>
@stop

