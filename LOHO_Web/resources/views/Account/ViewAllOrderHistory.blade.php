@extends('Layout.master')

@section('title','我的所有訂單紀錄')
@section('head')
<link href="{{ URL::asset('/css/ForgetPasswordToModify.css') }}" rel="stylesheet" type="text/css" />
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
                  <td class="order_id">{{$order_history['id']}}</td>
                  <td>{{$order_history['goodsTotal']}}</td>
                  <td>{{$order_history['shippingFee']}}</td>
                  <td>{{$order_history['coupon_price']}}</td>
                  <td>{{$order_history['coupon_code']}}</td>
                  <td>{{$order_history['orderTotal']}}<button class = "detail_order_info">詳細資訊</button></td>
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
<script>
$('.detail_order_info').click(function (e) { 
    e.preventDefault();
    let order_id = $(this).parent('td').parent('tr').children('td,order_id').html();
    
    window.location = 'ParticularOrderHistory?order_id=' + order_id;

});
</script>
@stop

