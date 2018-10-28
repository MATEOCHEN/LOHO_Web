@extends('Layout.master')
@section('title','優惠卷管理')
@section('head')
<script src="{{ URL::asset('js/Admin/ManageVoucher.js') }}"></script>
@stop

@section('content')
<div class = "content d-flex flex-column align-items-center">
  <p class="h1">優惠卷管理</p>
  <div style="text-align:center">
    <!--新增優惠卷彈跳式視窗 -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addVoucher">
        新增優惠卷
    </button>
    <div class="modal fade" id="addVoucher" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">新增優惠卷</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <ul>
              <li>優惠代碼:<input type="text" name="input_voucher_coupon_code" id="" value="" class="input_voucher_coupon_code"></li>
              <li>優惠金額:<input type="text" name="input_voucher_price" id="" value="" class="input_voucher_price"></li>  
          </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
            <button type="button" class="btn btn-success" id="addVoucher_confirm" data-dismiss="modal">新增</button>
          </div>
        </div>
      </div>
    </div>  
  </div>  
  <!-- 檢視優惠卷項目 -->
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">編號</th>
        <th scope="col">優惠代碼</th>
        <th scope="col">優惠金額</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data['vouchers'] as $voucher)
        <tr>
            <td>{{$voucher['id']}}</td>
            <td>{{$voucher['coupon_code']}}</td>
            <td>{{$voucher['discounted_price']}}</td>
        </tr>             
        @endforeach     
    </tbody>
  </table>
</div>   

@stop

