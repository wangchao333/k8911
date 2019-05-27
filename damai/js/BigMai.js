// <!-- 二维码动态效果 -->
var scan = document.getElementById("scan");
var QR = document.getElementById("QR");
scan.onmouseover=function(){
	QR.style.top =325+"px";
}
scan.onmouseout	=function(){
	QR.style.top =415+"px";
}

// 中间按钮效果点击事件
var butplay_1 = document.getElementById("butplay_1");
var butplay_2 = document.getElementById("butplay_2");
var butplay_3 = document.getElementById("butplay_3");
var butplay_4 = document.getElementById("butplay_4");
var content_two = document.getElementById("content_two");
var content_three = document.getElementById("content_three");

butplay_1.onclick=function(){
	butplay_1.style.display = "block";
	butplay_4.style.display ="none";
	content_three.style.display ="none";
	content_two.style.display ="block";
	content_three.style.display ="none";
}

butplay_2.onclick=function(){
	butplay_1.style.display="none";
	butplay_2.style.display="none";
	butplay_3.style.display="block";
	butplay_4.style.display ="block";
	content_two.style.display ="none";
	content_three.style.display ="block";
}

butplay_4.onclick=function(){
	butplay_1.style.display="block";
	butplay_2.style.display="block";
	butplay_3.style.display="none";
	butplay_4.style.display ="none";
	content_two.style.display ="block";
	content_three.style.display ="none";
}