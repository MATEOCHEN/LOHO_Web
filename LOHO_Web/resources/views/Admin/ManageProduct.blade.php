@extends('Layout.master')

@section('title','上傳商品')
@section('head')
<link href="{{ URL::asset('/css/ManageProduct.css') }}" rel="stylesheet" type="text/css" />
<script>
    $(document).ready(function () {
        $(':input[type="submit"]').prop('disabled', true);
        $(':input[type="text"]').keyup(function() {
            if($(this).val() != '') {
                let parent_dom = $(this).parent("li");
                let text_dom = parent_dom.children(':input[type="submit"]');
                text_dom.prop('disabled', false);
            }
        });

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });
        
    $(':input[type="submit"]').click(function (e) { 
        alert("click");
        let parent_dom = $(this).parent("li");
        let text_dom = parent_dom.children(':input[type="text"]');
        // First way to get a value
        value = text_dom.val(); 
        alert(value);
        
    });

    });

</script>
@stop

@section('content')
<div class = "content">
    <div class="d-flex flex-row justify-content-center">
            <ul>
                <li><h5>目前商品(圖片大小限制為64KB, 格式限制為jpeg、png、bmp、gif、 或 svg)</h5></li>
                <li>商品編號:<input type="text" name="id" id="" value="{{$data['id']}}"><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>
                <li>商品名稱:<input type="text" name="name" id="" value="{{$data['name']}}"><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>
                <li>商品價錢:<input type="text" name="price" id="" value="{{$data['price']}}"><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>
                <li>商品描述:<input type="text" name="description" id="" value="{{$data['description']}}"><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>
                <li>剩餘數量:<input type="text" name="remain_count" id="" value="{{$data['remain_count']}}"><input type="submit" value="更改" class="btn btn-primary btn-sm modify"></li>
                <li><img src="{{ asset($data['img_url']) }}" height="300" width="300"> 
                    <form method="post" enctype="multipart/form-data" action="/LOHO_Web/public/upload">
                        {{ csrf_field() }}
                        <input type="file" name="file" />
                        <input type="submit" name="submit" value="上傳" />
                        @foreach ($errors->all() as $error)
                            <ul><li>{{ $error }}</li></ul>  
                        @endforeach
                    </form></li>
            </ul>
</div>

@stop

