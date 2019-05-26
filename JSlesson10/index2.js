window.onload = function(){
	var prev = document.getElementById("prev");
	var next = document.getElementById("next");
	var list = document.getElementById("list");
	var button = document.getElementById("buttons").getElementsByTagName("span");
	var l;
	// 定义图片顺序变量，默认值为1
	var index = 1;
	next.onclick = function(){
		// 14.当点击下一张图片的时候，就把顺序+1
		index = index + 1;
		// 15.判断，当显示的图片是第五张的时候，把顺序改为第一张
		if(index == 5){
			index = 1;
		}
		// 16.将图片顺序传入move方法
		move(index);
		// 1.点击下一张按钮，执行切换动作
		var time = setInterval(function(){
			// 2.每毫秒从右向左移动10px
			l = parseInt(list.style.left) - 10;
			list.style.left = l + "px";
			// 3.判断挪动后的left值，挪动一张就停止
			if(l % -600 == 0){
				// 4.当挪动到最后一个图片(第一张),让left瞬间回到第二个图片(第一张)
				if(l == -3000){
					list.style.left = -600 + "px";
				}
				// 5.效果实现后，停止定时器
				clearInterval(time);
			}
		},1)
	}
	prev.onclick = function(){
		// 17.当点击上一张图片的时候，就把顺序-1
		index = index - 1;
		// 18.判断，当显示的图片是第一张的时候，把顺序改为第五张
		if(index == 0){
			index = 4;
		}
		// 19.将图片顺序传入到move方法
		move(index);
		// 6.点击上一张按钮，执行切换动作
		var time = setInterval(function(){
			// 7.每毫秒从左向右移动10px
			l = parseInt(list.style.left) + 10;
			list.style.left = l + "px";
			// 8.判断挪动后的left值，挪动一张就停止
			if(l % 600 == 0){
				// 9.当挪动到第一个图片(第四张),让left瞬间回到第五个图片(第四张)
				if(l == 0){

					list.style.left = -2400 + "px";
				}
				// 10.效果实现后，停止定时器
				clearInterval(time);
			}
		},1)
	}

	// 11.定义一个挪动圆点效果的方法，需要传递参数，参数代表图片的顺序
	function move(index){
		// 12.清除所有圆点的特效
		for(var i = 0 ; i < button.length;i++){
			button[i].className = "off";
		}
		// 13.给当前显示图片对应的圆点加上特效，因为当前显示的图片顺序比下标大1，所以-1;
		button[index - 1].className = "on";
	}
	// 20.当点击对应的圆点的时候，要显示对应顺序的图片
	for(var i = 0; i < button.length;i++){
		button[i].onclick = function(){
			// 21.获取点击的圆点的顺序
			index = parseInt(this.getAttribute("index"));
			// 22.将圆点顺序传入move方法，让当前圆点显示特效
			move(index);
			// 23.点击圆点要显示对应顺序图片，就要获取此时显示的图片的left值
			var oldLeft = parseInt(list.style.left);
			// 24.计算点击圆点对应顺序图片的left值
			var newLeft = index * -600;
			// 25.判断点击圆点后，图片切换的方向,如果此时显示的图片顺序比点击圆点对应的图片顺序小，就要从右往左移动
			if(oldLeft > newLeft){
				// 26.移动效果使用定时器来完成，每毫秒移动10像素
				var time = setInterval(function(){
					//27.移动方向后的值
					oldLeft = oldLeft - 10;
					// 28.将每次移动的值赋值过去，显示移动效果
					list.style.left = oldLeft + "px";
					// 29.当移动的值达到预定位置时，停止移动
					if(oldLeft == newLeft){
						clearInterval(time);
					}
				},1)
			// 30.判断点击圆点后，图片切换的方向,如果此时显示的图片顺序比点击圆点对应的图片顺序大，就要从左往右移动
			}else if(oldLeft < newLeft){
				// 31.移动效果使用定时器来完成，每毫秒移动10像素
				var time = setInterval(function(){
					//32.移动方向后的值
					oldLeft += 10;
					// 33.将每次移动的值赋值过去，显示移动效果
					list.style.left = oldLeft + "px";
					if(oldLeft == newLeft){
						// 34.当移动的值达到预定位置时，停止移动
						clearInterval(time);
					}
				},1)
			}
		}
	}
}