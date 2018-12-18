@extends('Layout.master')

@section('title','AdminIndex')
@section('head')
<link href="{{ URL::asset('/css/ManageItems.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('/js/Admin/admin.js') }}"></script>
<script src="{{ URL::asset('/js/Admin/AdminIndex.js') }}"></script>
@stop

@section('content')
<div class="content" style="text-align:center">
    <div class="category">
        <h1>商品管理</h1>
        <input type="button" class="btn btn-success btn-sm category_btn" value="c001">
        <input type="button" class="btn btn-success btn-sm category_btn" value="c002">
    </div>
    <div class="account">
        <h1>會員管理</h1>
        <input type="button" class="btn btn-success btn-sm" value="使用者資料">
    </div>
    <div class="voucher">
        <h1>優惠卷管理</h1>
        <input type="button" class="btn btn-success btn-sm" value="優惠卷品項管理">
        <input type="button" class="btn btn-success btn-sm" id="user_own_vouchers_button" value="會員優惠卷管理">
    </div>
</div>

@stop
