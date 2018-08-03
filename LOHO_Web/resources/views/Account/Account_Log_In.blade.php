<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Account_Log_In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- My CSS -->
    <link href="{{ URL::asset('/css/All.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/css/Account_Log_In.css') }}" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    <script src="../LOHO-Project/JS/main.js"></script>
</head>

<body>
    <div class="container-block">
        <div class="wrap text-center">
            <div class="logo-img">
                <img src="{{ URL::asset('/Image/LOHO_Logo.png') }}" alt="" class="img-fluid">
            </div>
            <br>
            <h2>使用LOHO帳號登入</h2>
            <form action="AfterAccount_Log_In" method="POST">
                {{ csrf_field() }}
                <input type="text" name="account" value="<?php  csrf_token(); ?>">
                <input type="password" name="password"value="<?php  csrf_token(); ?>">
                <div class="top-button">
                    <button type="button" class="btn btn-dark" onclick="window.location='{{ url("Account/ForgetPassword") }}'">忘記密碼</button>
                    <button type="button" class="btn btn-dark" onclick="window.location='{{ url("Account/RegisterAccount") }}'">註冊</button>
                </div>
                <div class="down-button">
                    <button type="submit" class="btn btn-dark">登入</button>
                    <button type="button" class="btn btn-primary">用Facebook登入</button>
                </div>
            </form>
            {{-- {{}}為blade執行區塊 --}}
            {{ $title}} {{ $data['account']}}{{ $data['password']}}
            {{-- 如果tel不存在傳預設值 --}}
            {{isset($tel)?$tel:'無此電話'}}
            {{-- 傳script需使用!! --}}
            {!!$str!!}
            @if($price > 100)
                {{'高單價'}}<br>
                @else
                {{'低單價'}}<br>
            @endif
            @foreach($scores as $subject => $score)
                {{$subject}}={{$score}}<br>
            @endforeach
        </div>
    </div>
</body>

</html>