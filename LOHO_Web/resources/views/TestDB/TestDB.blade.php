@extends('Layout.master')

@section('title','上傳商品')
@section('head')
<link href="{{ URL::asset('/css/Account_Log_In.css') }}" rel="stylesheet" type="text/css" />
@stop


@section('content')
<div class = "content">

    <div class="d-flex flex-row">
            <div>
                <h5>目前圖片(圖片大小限制為64KB, 格式限制為jpeg、png、bmp、gif、 或 svg)</h5>
                <div>{{$data['name']}}</div>
                <img src="data:image/png;base64,{{ chunk_split(base64_encode($data['img'])) }}" height="300" width="300"> 
                    <form method="post" enctype="multipart/form-data" action="/LOHO_Web/public/upload">
                        {{ csrf_field() }}
                        <input type="file" name="file" />
                        <input type="submit" name="submit" value="上傳" />
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </form>
            </div>
</div>

@stop

