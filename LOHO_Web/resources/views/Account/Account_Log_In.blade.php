@extends('Layout.master')

@section('title','登入帳號')
@section('head')
<link href="{{ URL::asset('/css/Account_Log_In.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('/js/Account/Account_Log_In.js') }}"></script>
@stop
@section('content')
<div class = "content">
    <div class="container-block">
        <div class="wrap text-center">
            <div class="logo-img">
                <img src="{{ URL::asset('/Image/LOHO_Logo.png') }}" alt="" class="img-fluid">
            </div>
            <br>
            <h2>LOHO帳號登入</h2>
            <form action="" method="POST" id="login">
                {{ csrf_field() }}
                <div class="form-group d-flex flex-column justify-content-start align-items-start" >
                    <label for="formGroupExampleInput">帳號</label>
                    <input type="text" class="form-control" name="account" id="formGroupExampleInput" placeholder="輸入帳號" value="<?php  csrf_token(); ?>">
                  </div>
                  <div class="form-group d-flex flex-column justify-content-start align-items-start">
                    <label for="formGroupExampleInput2">密碼</label>
                    <input type="password" class="form-control" name="password" id="formGroupExampleInput2" placeholder="輸入密碼" value="<?php  csrf_token(); ?>">
                  </div>
                <div class="down-button">
                    <button type="submit" class="btn btn-dark">登入</button>
                </div>
                <div class="top-button">
                    <button type="button" class="btn btn-dark" onclick="window.location='{{ url("Account/ForgetPassword") }}'">忘記密碼</button>
                    <button type="button" class="btn btn-dark" onclick="window.location='{{ url("Account/RegisterAccount") }}'">註冊</button>
                </div>
                <div class="down-button">
                    <button type="button" class="btn btn-primary">用Facebook登入</button>
                </div>
            </form>
        </div>
    </div>
      <!-- Error Modal -->
  <div class="modal fade" id="ErrorModal" tabindex="-1" role="dialog" aria-labelledby="ErrorModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ErrorModalLabel">提醒!!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModal">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <ul id="errors_area">

              </ul>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary delete_cancel" data-dismiss="modal" id="confirmError">確認</button>
            </div>
          </div>
        </div>
      </div> 
</div>

@stop

