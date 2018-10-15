@extends('Layout.master')
@section('title','優惠卷管理')
@section('head')
<script src="{{ URL::asset('/js/Admin/admin.js') }}"></script>
@stop

@section('content')
<div class = "content d-flex flex-column align-items-center">
  <p class="h1">優惠卷管理</p>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">編號</th>
            <th scope="col">優惠代碼</th>
            <th scope="col">優惠金額</th>
            <th scope="col">使用者編號</th>
            <th scope="col">新增時間</th>
            <th scope="col">更改時間</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data['vouchers'] as $voucher)
            <tr>
                <td>{{$voucher['id']}}</td>
                <td>{{$voucher['coupon_code']}}</td>
                <td>{{$voucher['discounted_price']}}</td>
                <td class="user_id">{{$voucher['user_id']}}</td>
                <td>{{$voucher['created_at']}}</td>
                <td>{{$voucher['updated_at']}}</td> 
            </tr>             
            @endforeach     
        </tbody>
      </table>
</div>   
    
@stop

