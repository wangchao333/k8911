// alert(1);
 var nume999=0; //通过此变量的值 控制两个按钮hover状态变动  此处非常绕
 // 封装clickbox1方法 为点击事件
 function clickbox1(){
 $(".rightf-3").click(function(){
	$(this).css({"background":"url(img/min.png) no-repeat -33px 12px","background-color":" #ed0a75"});
	// 点击自己时背景变红 
	$(".rightf-2").css({"background":"url(img/min.png) no-repeat -80px 12px","background-color":"#f5f5f5"});
	// 另一个背景变白
	$(".display1").css("display","none"); //隐藏横版
	$(".display").css("display","block");//显示竖版
	nume999=0;//点击时值为0
})
}
// 绑定鼠标移入移出事件 因为点击事件与css hover有冲突 所有使用jq绑定此事件
$(".rightf-3").hover(function(){
	$(this).css({"background":"url(img/min.png) no-repeat -33px 12px","background-color":" #ed0a75"});
	// 移入背景变红 
	clickbox1();//调用点击事件的函数 此事件需点击才执行 主要是为了nume99值的变动 点击值为0
},function(){
	if (nume999==0) {
		$(this).css({"background":"url(img/min.png) no-repeat -33px 12px","background-color":" #ed0a75"});
		// 移出时 当为nume999值为0 自己背景变红 
	}
	else{
		$(this).css({"background":"url(img/min.png) no-repeat 12px 12px","background-color":"#f5f5f5"});
		// 反之 当nume值不为0 自己背景变白 
	}	
})






function clickbox(){
	$(".rightf-2").click(function(){
	// alert(1);
	$(this).css({"background":"url(img/min.png) no-repeat -123px 12px","background-color":" #ed0a75"});
	// 点击自己时背景变红 
	$(".rightf-3").css({"background":"url(img/min.png) no-repeat 12px 12px","background-color":"#f5f5f5"});
	// 另一个背景变白 
	$(".display").css("display","none");//隐藏竖版
	$(".display1").css("display","block");//显示横版
	nume999=1;//点击时值为1
})
}
$(".rightf-2").hover(function(){
	$(this).css({"background":"url(img/min.png) no-repeat -123px 12px","background-color":" #ed0a75"});
	// 移入背景变红 
	clickbox();//调用点击事件的函数 此事件需点击才执行 主要是为了nume99值的变动 点击值为1
	
},function(){
	// clickbox();
	if (nume999==1) {
		$(this).css({"background":"url(img/min.png) no-repeat -123px 12px","background-color":" #ed0a75"});
		// 移出时 当为nume999值为1 自己背景变红
	}
	else{
		$(this).css({"background":"url(img/min.png) no-repeat -80px 12px","background-color":"#f5f5f5"});
		// 反之 当nume值不为1 自己背景变白 
	}	
})
// console.log(nume999);

