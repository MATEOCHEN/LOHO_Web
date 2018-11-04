@extends('Layout.master')

@section('title','選擇優惠卷')
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
                  <td class="coupon_code">{{$voucher['coupon_code']}}</td>
                  <td>{{$voucher['discounted_price']}}</td>
                  <td>{{$voucher['created_at']}} <button class = "use">使用</button></td>
              </tr>             
              @endforeach     
          </tbody>
        </table>
</div>   
<script>
$(document).ready(function () {
        //ajax 初始化
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

  $('.use').click(function (e) { 
    e.preventDefault();
    let coupon_code = $(this).parent('td').parent('tr').children('td,coupon_code').html();
    
    $.ajax({
      type: "POST",
      url: "UseVoucher",
      data: {coupon_code:coupon_code},
      dataType: "json",
      success: function (response) {
        alert('使用編號:'+response.coupon_code+'優惠卷' + '價格:'+response.coupon_price);
        window.location = "/LOHO_Web/public/Shopping/ConfirmShoppingList";
      }
    });
  });
});
</script>
@stop

