@extends('Layout.master')
@section('title','優惠卷管理')
@section('head')
<script src="{{ URL::asset('js/Admin/ManageVoucher.js') }}"></script>
@stop

@section('content')
<div class = "content d-flex flex-column align-items-center">
  <p class="h1">使用者優惠卷管理</p>
  <div style="text-align:center">
      <!-- 檢視所有優惠卷 -->
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">優惠卷編號</th>
            <th scope="col">使用者編號</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data['vouchers'] as $voucher)
            <tr>
                <td>{{$voucher['user_id']}}</td>
                <td class="user_id">{{$voucher['voucher_id']}}</td> 
            </tr>             
            @endforeach     
        </tbody>
    </table>
</div>   

@stop

