@extends('Layout.master') 
@section('title','我的購物車') 
@section('head')
<link href="{{ URL::asset('css/FillOrderList.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('js/Shopping/jquery.twzipcode.min.js')}}"></script>
<script src="/LOHO_Web/public/js/ShoppingProcess/FillOrderList.js"></script>
<style>
.zipcode {
    margin-left :5px;
    width :75px;
}
.country {
    height : 30px;
    font-size : 16px;
}
.area{
    height : 30px;
}

.address {
    margin-left : 5px;
    height : 30px;
    width : 280px;
}

</style>
@stop
@section('content')
<div class="content">
    <div class="outer">
        <div class="wrap text-JhengHei">
            <h1 class="text-center">訂單進度</h1>
            <div class="progress" style="height: 30px">
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.1 確認商品</p></div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.2 填寫資料</p></div>
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.3 付款方式</p></div>
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.4 確認訂單</p></div>
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.5 完成訂單</p></div>
            </div>
            <div class="list position-center">
                <div class="col align-self-end">
                    <div class="row">
                        <h3 class="pt-3 ml-3">訂購人資料</h3>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <label for="ordererName" class="col-form-label">姓名：</label> 
                            <input type="text" id="ordererName" placeholder="亦可輸入公司名稱(限制十五字元)" size="28" maxlength="15" value="{{$data['ordererName']}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <label for="ordererTEL" class="col-form-label">電話：</label> 
                            <input type="text" class="" id="ordererTEL" placeholder="ex：048720552" size='15' maxlength="10" value="{{$data['ordererTEL']}}">
                        </div>
                        <div class="col-5">
                            <label for="ordererPhone" class="col-form-label ">手機：</label> 
                            <input type="text" class="" id="ordererPhone" placeholder="ex: 0958213456"size='15' maxlength='10'value="{{$data['ordererPhone']}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex flex-row mt-3 ml-3">
                            <label for="twzipcode" class="col-form-label">地址：</label>
                            <div id="twzipcode"></div>
                            <input type="text" class="address" id="address" placeholder="地址" value="{{$data['ordererAddress']}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="ordererEmail" class="col-form-label">E-mail：</label> 
                            <input type="text" class="" id="ordererEmail" size="35" value="{{$data['ordererEmail']}}">
                        </div>
                    </div>
                    <div class="row">
                        <h3 class="pt-3 ml-3">收件人資料</h3>                     
                        <div class="ml-5 pt-4 align-self-end">
                                <input class="form-check-input" type="checkbox"  id="defaultCheck">
                                <label class="form-check-label" for="defaultCheck">同訂購人資料</label> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <label for="RecipientName" class="col-form-label">姓名：</label> 
                            <input type="text" class="" id="RecipientName" placeholder="亦可輸入公司名稱(限制十五字元)" size="28"maxlength="15" value="{{$data['RecipientName']}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <label for="RecipientTEL" class="col-form-label">電話：</label> 
                            <input type="text" class="" id="RecipientTEL" placeholder="ex：048720552" size='15' maxlength='10' value="{{$data['RecipientTEL']}}">
                        </div>
                        <div class="col-5">
                            <label for="RecipientPhone" class="col-form-label ">手機：</label> 
                            <input type="text" class="" id="RecipientPhone" placeholder="ex: 0958213456" size='15' maxlength='10' value="{{$data['RecipientPhone']}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex flex-row mt-3">
                            <label for="twzipcode1" class="col-form-label ml-3">地址：</label>
                            <div id="twzipcode1"></div>
                            <input type="text" class="address" id="address1" placeholder="地址" value="{{$data['RecipientAddress']}}">
                        </div>                     
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="RecipientEmail" class="col-form-label">E-mail：</label> 
                            <input type="text" class="" id="RecipientEmail" size="35" value="{{$data['RecipientEmail']}}">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center pt-3">
                        <button type="button" id="last_step"class="btn btn-secondary mr-5">上一步</button>
                        <button type="button" id="next_step" class="btn btn-secondary">下一步</button>
                    </div>
                </div>
            </div>   
        </div>
    </div>
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
@stop


