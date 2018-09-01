@extends('Layout.master')

@section('title','登入帳號')
@section('head')
<link href="{{ URL::asset('/css/Account_Log_In.css') }}" rel="stylesheet" type="text/css" />
@stop


@section('content')
<div class = "content">
    <img src="data:image/png;base64,{{ chunk_split(base64_encode($data['img'])) }}" height="300" width="300"> 
    <form method="post" enctype="multipart/form-data" action="/LOHO_Web/public/upload">
        {{ csrf_field() }}
        <input type="file" name="file" />
        <input type="submit" name="submit" value="upload" />
    </form>

</div>

@stop

