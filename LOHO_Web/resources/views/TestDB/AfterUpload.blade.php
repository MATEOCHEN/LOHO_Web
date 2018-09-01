@extends('Layout.master')

@section('title','登入帳號')
@section('head')
<link href="{{ URL::asset('/css/Account_Log_In.css') }}" rel="stylesheet" type="text/css" />
@stop


@section('content')
<div class = "content">
    <img src="data:image/png;base64,{{ chunk_split(base64_encode($data['img'])) }}" height="300" width="300"> 
</div>

@stop

