var td = new Array();
var playing = false;
var score = 0;
var countDown = 90;
var interId = null;
var	timeId = null;

function GameStart(){
playing = true;
interId = setInterval("show()",1000);
document.fomr1.score.value=score;
timeShow();
}
	
function timeShow(){
	document.fomr1.time.value=countDown;
	if(countDown == 0)
		{
			GameOver();
			return;
		}
	else
		{
			countDown = countDown-1;
			timeId = setTimeout("timeShow()",1000);
		}
}
function timeStop(){
	clearInterval(interId);//clearInterval()方法返回setInterval()方法的id
	clearTimeout(timeId);//clearTime()方法返回setTimeout()的id
}
	
function show(){
	if(playing)
	{
		var current = Math.floor(Math.random()*9);
		document.getElementById("td["+current+"]").innerHTML = '<img src="/LOHO_Web/public/Image/遊戲畫面素材/地鼠1.png">';
		setTimeout("document.getElementById('td["+current+"]').innerHTML=''",3000);
	}
}
function clearMouse(){
	for(var i=0;i<=9;i++)
	{
		document.getElementById("td["+i+"]").innerHTML="";
	}
}
function hit(id){
	if(playing==false)
	{
		alert("請點擊開始遊戲");
		return;
	}
	else
	{	
		if(document.getElementById("td["+id+"]").innerHTML!="")
		{
			score += 10;
			document.fomr1.score.value = score;
			document.getElementById("td["+id+"]").innerHTML="";
		}
		else
		{
			
			document.fomr1.score.value = score;
		}
	}
}

function GameOver(){
	timeStop();
	playing = false;
	clearMouse();
	alert("游戏结束！\n你获得的分数为："+score);
	score = 0;
	countDown = 90;
}