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
        <div class="d-flex flex-column align-items-center" id = "wrap">
          
        </div>
        <div style="text-align:center">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
              新增商品
          </button>
          <button type="button" class="btn btn-primary update">
            更新商品
          </button>
        </div>
  <!-- Delete Modal -->
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


<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">新增商品</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul>
          <li>商品編號:<input type="text" name="item_id" id="" value="" class="item_id"></li>
          <li>商品名稱:<input type="text" name="name" id="" value="" class="name"></li>
          <li>商品價錢:<input type="text" name="price" id="" value="" class="price"></li>
          <li>商品描述:<input type="text" name="description" id="" value="" class="description"></li>
          <li>剩餘數量:<input type="text" name="remain_count" id="" value="" class="remain_count"></li>
          <li><img src="" height="300" width="300" id="image_adding"> 
              <form enctype="multipart/form-data" id="submit_image">
                  {{ csrf_field() }}
                  <input type="file" name="file" />
                  <input type="submit" name="submit" value="上傳" />
                  <ul id="addingstatus">
                  </ul>
              </form></li>  
  </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-success" id="addItem_confirm" data-dismiss="modal">新增</button>
      </div>
    </div>
  </div>
</div>  
</div>   
    
@stop

