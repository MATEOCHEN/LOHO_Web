@extends('Layout.master')

@section('title','檢視優惠卷')
@section('head')
<link href="{{ URL::asset('/css/ForgetPasswordToModify.css') }}" rel="stylesheet" type="text/css" />
@stop
@section('content')
<div class="content">
    <div class="container-block">
        <div class="d-flex flex-row">
            <div class="left-block">
                    <ul class="list-group mt-3 text-JhengHei">
                        <a class="list-group-item ml-3 h5" href="{{url::asset('Account/PersonalInformation')}}">個人資訊</a>
                        <a class="list-group-item ml-3 h5" href="{{url::asset('Account/AccountInformation')}}">帳戶資訊</a>
                        <a class="list-group-item ml-3 h5" href="{{url::asset('Account/ViewAllOrderHistory')}}">訂單紀錄</a>
                        <a class="list-group-item ml-3 h5" href="{{url::asset('Account/ViewVoucher')}}">優惠券資訊</a>
                    </ul>
                </div>
            </div>
            <div class="col right-block">
                <div class="text-center text-JhengHei">
                    <p class="h1">我的優惠卷</p>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">優惠代碼</th>
                            <th scope="col">優惠金額</th>
                            <th scope="col">新增時間</th>
                            <th scope="col">到期時間</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['vouchers'] as $voucher)
                            <tr>
                                <td>{{$voucher['coupon_code']}}</td>
                                <td>{{$voucher['discounted_price']}}</td>
                                <td>{{$voucher['created_at']}}</td>
                                <td>{{$voucher['expired_date']}}</td>
                            </tr>             
                            @endforeach     
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>  
</div>   
<script>

</script>
@stop

