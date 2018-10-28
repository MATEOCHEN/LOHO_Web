@extends('Layout.master')

@section('title','檢視優惠卷')
@section('head')
<link href="{{ URL::asset('/css/ForgetPasswordToModify.css') }}" rel="stylesheet" type="text/css" />
@stop
@section('content')
<div class = "content d-flex flex-column align-items-center">
    <p class="h1">我的優惠卷</p>
      <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">優惠代碼</th>
              <th scope="col">優惠金額</th>
              <th scope="col">新增時間</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($data['vouchers'] as $voucher)
              <tr>
                  <td>{{$voucher['coupon_code']}}</td>
                  <td>{{$voucher['discounted_price']}}</td>
                  <td>{{$voucher['created_at']}}</td>
              </tr>             
              @endforeach     
          </tbody>
        </table>
</div>   
@stop

