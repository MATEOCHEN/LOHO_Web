@extends('Layout.master')

@section('title','上傳商品')
@section('head')
<link href="{{ URL::asset('/css/ManageItems.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('/js/Admin/admin.js') }}"></script>
<script src="{{ URL::asset('/js/Admin/ManageItems.js') }}"></script>
@stop

@section('content')
<div class = "content">
    <div style="text-align:center">
        <span>分類:</span>
        <span class="category"></span>
        <input type="button" class="btn btn-success btn-sm change" value="c001">
        <input type="button" class="btn btn-success btn-sm change" value="c002">
    </div>
        <div class="d-flex flex-row align-items-center flex-wrap" id = "wrap">

        </div>
        <div style="text-align:center">
            <input type="button" class="btn btn-dark btn-sm modify" value="新增商品" id="addItem">
        </div>

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">刪除警告!!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          是否要刪除此欄位?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary delete_cancel" data-dismiss="modal">取消</button>
          <button type="button" class="btn btn-danger delete_confirm" data-dismiss="modal">刪除</button>
        </div>
      </div>
    </div>
  </div>        
</div>   
    
@stop

