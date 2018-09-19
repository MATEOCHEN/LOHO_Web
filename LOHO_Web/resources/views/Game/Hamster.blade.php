<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hamster</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('css/Hamster.css') }}" />
	<script src="{{ URL::asset('js/Hamster.js') }}"></script>
</head>
<body>
    <div class="content">
        <div class="">
            <button onclick="GameStart()">開始遊戲</button>
            <button onclick="GameOver()">暫停</button>
        </div>
        <div class="title">
            <form name="fomr1">
                <label>時間:</label>
                <input type="text" name="time" size="8" value="90" disabled>
                <label>分數：</label>
                <input type="text" name="score" size="8" value="0" disabled>
            </form>
        </div>
        <div class="table">
            <table>
                <tr>
                    <td id="td[0]" onclick="hit(0)"></td>
                    <td id="td[1]" onclick="hit(1)"></td>
                    <td id="td[2]" onclick="hit(2)"></td>
                </tr>
                <tr>
                    <td id="td[3]" onclick="hit(3)"></td>
                    <td id="td[4]" onclick="hit(4)"></td>
                    <td id="td[5]" onclick="hit(5)"></td>
                </tr>
                <tr>
                    <td id="td[6]" onclick="hit(6)"></td>
                    <td id="td[7]" onclick="hit(7)"></td>
                    <td id="td[8]" onclick="hit(8)"></td>
                </tr>
        </div>
    </div>
</body>
</html>