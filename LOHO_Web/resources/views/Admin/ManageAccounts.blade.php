@extends('Layout.master')
@section('title','會員管理')
@section('head')
<script src="{{ URL::asset('/js/Admin/admin.js') }}"></script>
@stop

@section('content')
<div class = "content d-flex flex-column align-items-center">
  <p class="h1">會員管理</p>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">編號</th>
            <th scope="col">帳號</th>
            <th scope="col">姓名</th>
            <th scope="col">電子信箱</th>
            <th scope="col">市話</th>
            <th scope="col">手機號碼</th>
            <th scope="col">地址</th>
            <th scope="col">是否訂閱</th>
            <th scope="col">新增時間</th>
            <th scope="col">更改時間</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data['users'] as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['account']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['telephone_number']}}</td>
                <td>{{$user['phone_number']}}</td>
                <td>{{$user['address']}}</td>
                <td>{{$user['is_subscribe']}}</td>
                <td>{{$user['created_at']}}</td>
                <td>{{$user['updated_at']}}</td> 
            </tr>             
            @endforeach     
        </tbody>
      </table>
</div>   
    
@stop

