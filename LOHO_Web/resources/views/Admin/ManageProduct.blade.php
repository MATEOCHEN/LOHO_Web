@extends('Layout.master')

@section('title','上傳商品')
@section('head')
<link href="{{ URL::asset('/css/ManageProduct.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('/js/ManageProduct.js') }}"></script>
@stop

@section('content')
<div class = "content">
    <div style="text-align:center">
        <input type="button" class="btn btn-primary btn-sm modify" value="新增商品" id="addItem">
    </div>
    
    <div class="d-flex flex-row justify-content-center">
                    @foreach ($data['items'] as $item)
                            @include('Admin.ItemArea')
                    @endforeach
</div>

@stop

