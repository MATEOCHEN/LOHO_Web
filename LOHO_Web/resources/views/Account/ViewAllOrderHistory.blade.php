@extends('Layout.master')

@section('title','我的訂單紀錄')
@section('head')
<link href="{{ URL::asset('/css/ForgetPasswordToModify.css') }}" rel="stylesheet" type="text/css" />
@stop
@section('content')
<div class = "content d-flex flex-column align-items-center">
    <div>
        <img src="<?php echo asset('/svg/New LOGO.svg');?>" width="300px" alt="" class="img-fluid">
    </div>
    <p class="h1">我的訂單紀錄</p>
      <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">訂單編號</th>  
              <th scope="col">商品金額</th>
              <th scope="col">運費小計</th>
              <th scope="col">優惠折抵</th>
              <th scope="col">優惠代碼</th>
              <th scope="col">總計</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($order_historys_list as $order_history)
              <tr>
                    <td class="order_id">{{$order_history['id']}}</td>
                  <td>{{$order_history['goodsTotal']}}</td>
                  <td>{{$order_history['shippingFee']}}</td>
                  <td>{{$order_history['coupon_price']}}</td>
                  <td>{{$order_history['coupon_code']}}</td>
                  <td>{{$order_history['orderTotal']}}<button class = "detail_order_info">詳細資訊</button></td>
              </tr>             
              @endforeach     
          </tbody>
        </table>
</div>   
<script>
$('.detail_order_info').click(function (e) { 
    e.preventDefault();
    let order_id = $(this).parent('td').parent('tr').children('td,order_id').html();
    alert(order_id);
    window.location = 'ParticularOrderHistory?order_id';

});
</script>
@stop

