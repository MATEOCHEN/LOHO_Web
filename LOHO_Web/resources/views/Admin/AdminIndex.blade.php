@extends('Layout.master')

@section('title','上傳商品')
@section('head')
<link href="{{ URL::asset('/css/ManageProduct.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')
<div class = "content" style="text-align:center">
    <form action="ManageProduct" method="get">
            <input type="text" name = "category_id" class="" value="c001" id="">
            <input type="submit" value="送出">
    </form>

</div>
<script>
        //ajax 初始化
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

</script>
@stop

