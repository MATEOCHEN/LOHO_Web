<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>樂活拼拼樂</title>
	<link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('css/Puzzle.css') }}" />
	<script src="{{ URL::asset('js/Game/Puzzle.js') }}"></script>
</head>

<body>
	<div id="info">
		<p class='tips'>樂活拼拼樂</p>
		<div class='tips'>步數：<span id="step">0</span></div>
	</div>
	<div id="main">
        <div id="block_0" class="block"><span class="order">1</span></div>
        <div id="block_1" class="block"><span class="order">2</span></div>
        <div id="block_2" class="block"><span class="order">3</span></div>
        <div id="block_3" class="block"><span class="order">4</span></div>
        <div id="block_4" class="block"><span class="order">5</span></div>
        <div id="block_5" class="block"><span class="order">6</span></div>
        <div id="block_6" class="block"><span class="order">7</span></div>
        <div id="block_7" class="block"><span class="order">8</span></div>
		<div id="block_8" class="block"><span class="order">9</span></div>
    </div>
	<div id="control">
		<h1 class='tips2'>限制步數為150步</h1>
		<h1>
        <button id="reset" class="btn">位置重換</button>
		</h1>
	</div>
	<div id="success">
        <h2>成功通關!</h2>
			<p>步數：<span id="suc_step">0</span></p>
			<button type="button">領取優惠券</button>
		</div>
		<div id="fail">
			<h2>失敗!</h2>
			<button type="button">回到主頁</button>
		</div>

</body>
</html>