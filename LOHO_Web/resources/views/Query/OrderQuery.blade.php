@extends('Layout.master')

@section('title','查詢訂單')
@section('head')
@stop
@section('content')
<div class="container-block  d-flex flex-column align-items-center text-JhengHei border">
    <div>
        <p class="h1">我的訂單查詢</p>
    </div>
    <div class='white-background w-75 rounded'>
            <h3 class='text-center pt-3'>訂單查詢資料</h3>
        <div class='text-right d-flex '>
            <div class='position-center pt-3'>
                <div>
                    <h5 class='d-inline'>姓名：</h5>
                    <input type="text">
                </div>
                <div class="pt-3">
                    <h5 class='d-inline'>電子郵件：</h5>
                    <input type="text">
                </div>
            </div>
        </div>
    </div>
    <div class='pt-3'>
        <button type='button' class='btn btn-outline-custom'id='searchOrderBtn'>訂單查詢</button>
    </div>
</div>
@stop