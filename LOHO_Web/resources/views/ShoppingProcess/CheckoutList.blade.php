@extends('Layout.master') 
@section('title','我的購物車') 
@section('head')
<link href="{{ URL::asset('css/CheckoutList.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('/js/ShoppingProcess/CheckoutList.js') }}"></script>
@stop
@section('content')
<div class="content">
    <div class="outer">
        <div class="wrap text-JhengHei">
            <h1>訂單進度</h1>
            <div class="progress" style="height: 30px">
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.1 確認商品</p></div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.2 填寫資料</p></div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.3 付款方式</p></div>
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.4 確認訂單</p></div>
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><p class="font-weight-bold pt-2" style="font-size: 20px">Step.5 完成訂單</p></div>
            </div>
            <div class="list">
                <b>請先選擇<a style="color : red;">付款方式</a>再點選下一步</b>
                <form class="form form-group">
                    <div class="option form-check" id="ATM_Transfer">
                        <input class="form-check-input" type="radio" name="pay" value="1" id="ATM_Transfer_Radio">
                        <label class="form-check-label" for="radio1">ATM轉帳</label>
                    </div>
                    <div class="option form-check" id="Bank_Transfer">                   
                        <input class="form-check-input" type="radio" name="pay"  value="2" id="Bank_Transfer_Radio">
                        <label class="form-check-label" for="radio2">銀行匯款</label>
                    </div>
                    <div class="option form-check" id="Cash_on_delivery">
                        <input class="form-check-input" type="radio" name="pay"  value="3" id="Cash_on_delivery_Radio">
                        <label class="form-check-label" for="radio3">貨到付款</label>
                    </div>
                    <div class="option form-check">
                        <input class="form-check-input" type="radio" name="pay" id="radio4" value="4" disabled = "disabled">
                        <label class="form-check-label" for="radio4">信用卡線上付款(測試中)</label>
                    </div>
                </form>
                <div>
                    <h3 class="ml-3">付款方式:<span id="payment_type"></span></h3>
                    <h3 class="ml-3"><span id="payment_info"></span></h3>
                </div>
                <div class="next">
                    <button class="button btn btn-secondary" id="last_step">上一步</button>
                    <button class="button btn btn-secondary" id="next_step">下一步</button>
                </div>
            </div>
        </div>
    </div>
      <!-- ATM_Transfer Modal -->
      <div class="modal fade" id="ATM_TransferModal" tabindex="-1" role="dialog" aria-labelledby="ATM_TransferModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ATM_TransferModalLabel">ATM轉帳</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModal">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div>
                        請使用ATM轉入台灣銀行代碼：004 帳號：049-001000682
                </div>
                <div>
                    為了促進雙方交易正確性，請填寫帳號後五碼
                </div>
                <form action="">
                    您金融帳號後五碼:<input type="text" id="ATM_Transfer_financial_info">
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" id="confirm_ATM_Transfer">確認</button>
              <button type="button" class="btn btn-secondary cancel" data-dismiss="modal">取消</button>
            </div>
          </div>
        </div>
    </div>
      <!-- Bank_Transfer Modal -->
      <div class="modal fade" id="Bank_TransferModal" tabindex="-1" role="dialog" aria-labelledby="Bank_TransferModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="Bank_TransferModalLabel">銀行匯款</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModal">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div>
                        請匯入：台灣銀行-員林分行 帳號：049-001000682 戶名：泉樺針織有限公司
                    </div>
                    <div>
                        為了促進雙方交易正確性，請填寫帳號後五碼
                    </div>
                    <form action="">
                        您金融帳號後五碼:<input type="text" id="Bank_Transfer_financial_info">
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal" id="confirm_Bank_Transfer">確認</button>
                  <button type="button" class="btn btn-secondary cancel" data-dismiss="modal">取消</button>
                </div>
              </div>
            </div>
    </div> 
      <!-- Cash_on_delivery Modal -->
      <div class="modal fade" id="Cash_on_deliveryModal" tabindex="-1" role="dialog" aria-labelledby="Cash_on_deliveryModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="Cash_on_deliveryModalLabel">貨到付款</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModal">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div>
                        您選擇貨到付款，將於到貨後與您收款
                    </div>
                    <form action="">
                        您地址為(如有誤請按取消並到前一頁修改):
                        <span id="address"></span>
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary confirm_Cash_on_delivery" data-dismiss="modal">確認</button>
                  <button type="button" class="btn btn-secondary cancel" data-dismiss="modal">取消</button>
                </div>
              </div>
            </div>
    </div>                  
</div> 
@stop