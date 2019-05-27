$(document).ready(function(){

		var c=0;
	// 点击加载更多
	// 
	// 
	
	$(".totop").click(function(){
		$("#one1").css("height",68+"px");
		$("#all>#one1>ul>span").css("background","url(img/icon2.png) no-repeat 33px 8px");
		$("#all>#one1>ul>span")[0].innerHTML="更多";
		$("#all").css("height",253+"px");
		c=0;
			$("#all>#one1>ul>span").mouseout(function(){
				$("#all>#one1>ul>span").css("background","url(img/icon2.png) no-repeat 33px 8px");

			});

			$("#all>#one1>ul>span").mouseover(function(){
				$("#all>#one1>ul>span").css("background","url(img/icon2.png) no-repeat 33px -171px");

			});
		
	});






		// $("#totop1").click(function(){
		// $("#one").css("height",68+"px");
		// $("#all>#one>ul>span").css("background","url(img/icon2.png) no-repeat 33px 8px");
		// $("#all>#one>ul>span")[0].innerHTML="更多";
		// $("#all").css("height",253+"px");
		// c=0;
		// 	$("#all>#one>ul>span").mouseout(function(){
		// 		$("#all>#one>ul>span").css("background","url(img/icon2.png) no-repeat 33px 8px");

		// 	});

		// 	$("#all>#one>ul>span").mouseover(function(){
		// 		$("#all>#one>ul>span").css("background","url(img/icon2.png) no-repeat 33px -171px");

		// 	});
		// 	});


























	$("#all>#one1>ul>span").click(function(){
		c++;
		if(c%2!=0){
			$("#all>#one1>ul>span")[0].innerHTML="收起";
			$("#all>#one1>ul>span").css("background","url(img/icon2.png) no-repeat 33px -150px");
			$("#one1").css("height",175+"px");
			$("#all").css("height",362+"px");

			$("#all>#one1>ul>span").mouseout(function(){
				$("#all>#one1>ul>span").css("background","url(img/icon2.png) no-repeat 33px -12px");

			});

			$("#all>#one1>ul>span").mouseover(function(){
				$("#all>#one1>ul>span").css("background","url(img/icon2.png) no-repeat 33px -150px");

			});

			// $("#all>#one>ul>span").mouseout(function(){
			// $("#all>#one>ul>span").css("background","url(img/icon2.png) no-repeat 33px -152px");

			// });
		}else{

			$("#one1").css("height",68+"px");
			$("#all>#one1>ul>span").css("background","url(img/icon2.png) no-repeat 33px -171px");
			$("#all>#one1>ul>span")[0].innerHTML="更多";
			$("#all").css("height",253+"px");

			$("#all>#one1>ul>span").mouseout(function(){
				$("#all>#one1>ul>span").css("background","url(img/icon2.png) no-repeat 33px 8px");
			});


			$("#all>#one1>ul>span").mouseover(function(){
				$("#all>#one1>ul>span").css("background","url(img/icon2.png) no-repeat 33px -171px");
			});

		}
		
	});


		// $("#all>#one>ul>span").mouseout(function(){
		// 	$("#all>#one>ul>span").css("background","url(img/icon2.png) no-repeat 33px 8px");
		// 	// background: url(img/icon2.png) no-repeat 33px 8px;

		// }

// $(document).click(function(){
// 	$("#ss").css("display","none");
// })

// $("#ss").click(function(event){
// 	$("#ss").css("display","black");
// 	event.stopPropagation();
// })

	
	// 时间段前
	$("#all>#four1>p>#text1").focus(function(event){
		$("#all>#four1>#img1").css("display","block");
		event.stopPropagation();
	});

	$("#all>#fou1r>#img1").click(function(event){
		$("#all>#four1>#img1").css("display","block");
		event.stopPropagation();
	});

	$("#all>#four1>p>#text1").blur(function(event){
		$("#all>#four1>#img1").css("display","none");
		event.stopPropagation();
	});



	// 时间段后
	$("#all>#four1>p>#text2").focus(function(event){
	$("#all>#four1>#img2").css("display","block");
		event.stopPropagation();
	});

	$("#all>#four1>p>#text2").blur(function(event){
		$("#all>#four1>#img2").css("display","none");
		event.stopPropagation();
	});

	$("#all>#four1>#img1").click(function(event){
		$("#all>#four1>#img1").css("display","block");
		event.stopPropagation();
	});



	// 按日历
	$("#all>#four1>p>#span3").click(function(event){
		event.stopPropagation();
		$("#all>#four1>#img3").css("display","block");
	})
	$(document).click(function(){
		$("#all>#four1>#img3").css("display","none");
	})
});