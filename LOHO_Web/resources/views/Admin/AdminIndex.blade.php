@extends('Layout.master')

@section('title','AdminIndex')
@section('head')
<link href="{{ URL::asset('/css/ManageProduct.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('/js/admin.js') }}"></script>
@stop

@section('content')
<div class="content" style="text-align:center">
    <input type="button" class="btn btn-success btn-sm change" value="c001">
    <input type="button" class="btn btn-success btn-sm change" value="c002">
</div>

@stop
