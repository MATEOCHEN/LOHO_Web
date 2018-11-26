<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>翻牌遊戲</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('/css/Card.css') }}" />
    
    <script src="{{ URL::asset('/js/htm5game.matchgame.js') }}"></script>
    <script src="{{ URL::asset('/js/jquery-1.11.1.min.js') }}"></script>  
</head>
<body>
    <div class="content">
        <div class="">
            <button onclick="GameStart()">開始遊戲</button>
            <button onclick="GameOver()">遊戲過關</button>
        </div>
        <div class="title">
            <form name="fomr1">
                <label>時間:</label>
                <input type="text" name="time" size="8" value="90" disabled>
            </form>
        </div>
        <div id="dialog" class="dialog">
            恭喜獲得優惠券!!<br/>
            <button class="button" onclick="">確定</button>
        </div>
        <div id="cards">
            <div class="card">
                <div class="face front"></div>
                <div class="face back"></div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
    $(function(){
        //实现随机洗牌
        neusoft.matchingGame.deck.sort(shuffle);
        //alert(neusoft.matchingGame.deck);
        var $card=$(".card");
        for(var i= 0;i<11;i++)
        {
            $card.clone().appendTo($("#cards"));
        }
        //对每张牌进行设置
        $(".card").each(function(index)
        {
            //调整坐标
            $(this).css({
                "left":(neusoft.matchingGame.cardWidth+20)*(index%4)+"px",
                "top":(neusoft.matchingGame.cardHeight+20)*Math.floor(index/4)+"px"
            });
            //吐出一个牌号
            var pattern=neusoft.matchingGame.deck.pop();
            //暂存牌号
            $(this).data("pattern",pattern);
            //把其翻牌后的对应牌面附加上去
            $(this).find(".back").addClass(pattern);
            //点击牌的功能函数挂接
            $(this).click(selectCard);
        });
    });
    </script>
</body>
</html>