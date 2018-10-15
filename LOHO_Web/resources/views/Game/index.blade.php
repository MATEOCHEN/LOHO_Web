<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>遊戲首頁</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

</head>
<body>
        <img style="position:absolute; z-index:1;" src="{{ URL::asset('/Image/遊戲畫面素材/遊戲首頁背景.png') }}" />
        
        <button onclick="self.location.href='https://tw.yahoo.com/'">
            <img style="position:absolute; top: 465px; left: 75px; z-index:2" width="225" height="125" src="{{ URL::asset('/Image/遊戲畫面素材/遊戲封面圖2.png') }}" />
        </button>
</body>
</html>