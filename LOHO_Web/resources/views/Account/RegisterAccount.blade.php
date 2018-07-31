<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Account_Log_In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../LOHO-Project/CSS/All.css">
    <link rel="stylesheet" href="../LOHO-Project/CSS/Account_Log_In.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link href="{{ URL::asset('/css/All.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/css/RegisterAccount.css') }}" rel="stylesheet" type="text/css" />
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
                <img src="../LOHO-Project/Image/LOHO_Logo.PNG" alt="" class="img-fluid">
            </div>
            <div class="page-title">註冊個人帳號</div>
            <form class="outer">
                <div class="subTitle">會員資訊</div>
                <div class="input-area">
                    <div class="left">
                        <div class="input-area">
                            <div class="input-name-text">*姓名：</div>
                            <input type="text">
                        </div>
                        <div class="input-area">
                            <div class="input-name-text">*暱稱：</div>
                            <input type="text">
                        </div>
                    </div>
                    <div class="right">
                        <button type="button" class="btn btn-primary btn-lg">用Facebook快速登入</button>
                    </div>
                </div>
                <div class="input-area">
                    <div class="gender-radio">
                        <input type="radio" name="gender" value="boy"> 男
                        <input type="radio" name="gender" value="girl"> 女
                    </div>
                </div>
                <div class="input-area">
                    <div class="input-text">*連絡電話：</div>
                    <input type="text">
                    <div class="input-text">*行動電話：</div>
                    <input type="text">
                </div>
                <div class="input-area">
                    <div class="input-text">*郵遞區號：</div>
                    <input type="text">
                </div>
                <div class="input-area">
                    <div class="input-text">*收件地址：</div>
                    <input type="text" style="width: 70%;">
                </div>
                <div class="input-area">
                    <div class="input-text">*電子信箱：</div>
                    <input type="text">
                </div>
                <div class="subTitle">帳戶設定</div>
                <div class="input-area">
                    <div class="input-text">*帳號：</div>
                    <input type="text">
                </div>
                <div class="input-area">
                    <div class="input-text">*密碼：</div>
                    <input type="text">
                </div>
                <div class="input-area">
                    <div class="input-text">*確認密碼：</div>
                    <input type="text">
                </div>
                <div class="input-area">
                    <div class="e-report">
                        <input type="radio" name="e-report" "" value="yes"> 我要訂閱電子報
                    </div>
                </div>
                <div class="submit-area">
                    <button type="button" class="btn btn-secondary active">註冊</button>
                    <div class="submit-text">
                        按下註冊按鈕的同時，表示您已經同意我們的資料使用政策與服務條款
                    </div>
                </div>
            </form>
        </div>

    </div>
</body>

</html>