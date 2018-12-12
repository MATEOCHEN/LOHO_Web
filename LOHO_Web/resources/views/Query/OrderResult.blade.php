@extends('Layout.master') 
@section('title','我的訂單') 
@section('head')

<link href="{{ URL::asset('css/CheckoutList.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('js/Account/OrderResult.js') }}"></script>

@stop
@section('content')
<div class = "container-block d-flex flex-column align-items-center text-JhengHei ">
    <p class="h1">我的訂單紀錄</p>
      <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">訂單編號</th>
              <th scope="col">購買日期</th>
              <th scope="col">訂單狀態</th>   
              <th scope="col">訂單小計</th>
              <th scope="col">運費小計</th>
              <th scope="col">優惠折抵</th>
              <th scope="col">總額</th>
            </tr>
          </thead>
          <tbody class='table-collapse'>
              @foreach ($order_historys_list as $order_history)
              <tr>
                  <td><a href = "" class='detail_order_info'>{{$order_history['id']}}</a></td>
                  <td>2018/12/10</td>
                  <td>已完成</td>
                  <td>{{$order_history['goodsTotal']}}</td>
                  <td>{{$order_history['shippingFee']}}</td>
                  <td>{{$order_history['coupon_price']}}</td>
                  <td>{{$order_history['orderTotal']}}</td>
              </tr>          
              @endforeach   
            <!--<tr>
                <td><a href="">#S0026519845</a></td>
                <td>2017/5/20</td>
                <td>已完成</td>
                <td>$560</td>   
                <td>$70(宅配到府)</td>
                <td>100</td>
                <td>$530</td>
            </tr>-->
          </tbody>
        </table>
        @if(sizeof($order_historys_list) == 0) 
            <div>
                <div>
                    <p class='text-danger font-weight-bold'>目前無商品資料</p>
                </div>
                <button type="button" class='btn btn-outline-custom' onclick="javascript:location.href='{{ url("Shopping/BrowseItems")}}'" id="logout_btn">現在去逛逛</button>
            </div>
        @endif
</div>  
@stop