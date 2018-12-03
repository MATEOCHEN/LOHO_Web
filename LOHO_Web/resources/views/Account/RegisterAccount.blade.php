@extends('Layout.master')

@section('title','註冊帳號')
@section('head')
<link href="{{ URL::asset('/css/RegisterAccount.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('js/Account/RegisterAccount.js') }}"></script>
@stop
@section('content')


    <div class="container-block">
        <div class="wrap text-center">
            <div class="logo-img">
                <img src="<?php echo asset('/svg/New LOGO.svg');?>" width="300px" alt="" class="img-fluid">
            </div>
            <div class="page-title">註冊個人帳號</div>
            <form class="outer" id="register_form">
                    {{ csrf_field() }}
                <div class="subTitle">會員資訊</div>
                <div class="input-area">
                    <div class="left">
                        <div class="input-area">
                            <div class="input-name-text">*姓名：</div>
                            <input type="text" name = "name" id="name">
                        </div>
                    </div>
                    <div class="right">
                        <button type="button" class="btn btn-primary btn-lg">用Facebook快速登入</button>
                    </div>
                </div>
                <div class="input-area">
                    <div class="input-text">*市話：</div>
                    <input type="text" name="telephone_number" id="telephone_number">
                    <div class="input-text">*行動電話：</div>
                    <input type="text" name = "phone_number" id="phone_number">
                </div>
                <div class="input-area">
                    <div class="input-text">*收件地址：</div>
                    <input type="text" style="width: 70%;" name="address">
                </div>
                <div class="input-area">
                    <div class="input-text">*電子信箱：</div>
                    <input type="text" name="email" id="email">
                </div>
                <div class="remind-text">
                    (格式xxx@gmail.com)
                </div>
                <div class="subTitle">帳戶設定</div>
                <div class="input-area">
                    <div class="input-text">*帳號：</div>
                    <input type="text" name="account" id="account">
                </div>
                <div class="remind-text">
                    (限半形英文或數字，10碼內不限大小寫)
                </div>
                <div class="input-area">
                    <div class="input-text">*密碼：</div> 
                    <input type="password" , name="password" id="password">
                </div>
                <div class="remind-text">
                    (限半形英文或數字，10碼內不限大小寫)
                </div>
                <div class="input-area">
                    <div class="input-text">*確認密碼：</div> 
                    <input type="password" , name="password_confirmation" id="password_confirmation">
                </div>
                <div class="remind-text">
                    (限半形英文或數字，10碼內不限大小寫)
                </div>
                <div class="submit-area" action="AfterRegisterAccount" method="POST">
                    <button class="btn btn-secondary active" type="submit">註冊</button>
                    <div class="submit-text">
                        按下註冊按鈕的同時，表示您已經同意我們的資料使用政策與服務條款
                    </div>
                </div>
            </form>
        </div>
        <!-- Error Modal -->
    <div class="modal fade" id="ErrorModal" tabindex="-1" role="dialog" aria-labelledby="ErrorModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ErrorModalLabel">提醒!!請填寫以下資料</h5>
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