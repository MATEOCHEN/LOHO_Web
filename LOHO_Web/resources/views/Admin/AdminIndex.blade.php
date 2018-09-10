@extends('Layout.master')

@section('title','AdminIndex')
@section('head')
<link href="{{ URL::asset('/css/ManageItems.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('/js/Admin/admin.js') }}"></script>
<script src="{{ URL::asset('/js/Admin/AdminIndex.js') }}"></script>
@stop

@section('content')
<div class="content" style="text-align:center">
    <h1>管理首頁</h1>
    <input type="button" class="btn btn-success btn-sm " value="c001">
    <input type="button" class="btn btn-success btn-sm " value="c002">
</div>

@stop
