var data='';//建立变量data 接受获取到的数据

// 此js文件只写封装方法 调用全在html里调用

//封装getdata方法 获取数据并赋值给data
function getdata(url,count=10,start=0){ //参数1：接口地址必选 参数2：获取几条可选 参数3：从下标为几的开始
	$.ajax({
		type:"get",
		url:url,//参数1
		dataType:"json",
		async:false,//此处得用同步  数据流原因 暂未搞懂
		data:{start,count},//参数3 2
		success:(res)=>{
			// console.log(res);
			data=res;//获取数据成功 将数据赋值给data

			// 使data=数据
		}
	})
	return data;
	// 将数据返回 此时data为全局变量 每调用一次方法 就改动一次
}


// 封装append1方法 添加主页中间部分盒子里最大图片那个盒子 参数为父盒子点class名
function append1(con){
	// 在获取到的数据data中进行循环遍历添加 无翻页效果所有未做清除操作
data.forEach(function(val,index){//val为内容 index为索引 
	 var title ="" //此判断控制标题长度
	 if(val.title.length >30){
	 	 	 			  	
	 title = val.title.substring(0,30)+"...."
	 }else{
	 	 title = val.title;
	 }
	 var str = `<div onclick="getContent(${val.did})" class="leftf"><img src='${val.profermer_photo}'>
	 <div class="mask"><p class="p1">${title}</p><p class="p2">${val.price}</p></div></div>`;
	 // 创建需要添加进去的大图片div结构并导入获取到的数据 绑定点击事件参为本身数据id  es6拼串方法 已静态结构为标准
	  $(con).prepend(str)
	 // 添加入盒子开头
	 	 	 			
})
}

// 封装append2方法 添加主页中间大盒子里其他6个盒子 参数为父盒子点class名
function append2(con){
	data.forEach(function(val,index){//val为内容 index为索引
	 var title ="" //此判断控制标题长度
	 if(val.title.length >17){
	 	 	 			  	
	 title = val.title.substring(0,17)+"...."
	 }else{
	 	 title = val.title;
	 }
	 var str=`<div class="center">
				<img src="${val.profermer_photo}" onclick="getContent(${val.did})">
				<p onclick="getContent(${val.did})">${title}</p>
				<span onclick="getContent(${val.did})">${val.address}</span>
				<span class="span" onclick="getContent(${val.did})">${val.releasetime}</span>
				<u onclick="getContent(${val.did})">${val.price}起</u>
			</div>`
	 // 创建需要添加进去的小图片div结构并导入获取到的数据 绑定点击事件参为本身数据id  es6拼串方法 
	  $(con).append(str)
	 // 添加入盒子尾部
	 	 	 			
})
}

// 封装appendtop方法 添加主页中间盒子里头部大标题 演唱会等 参数为父盒子点class名
function appendtop(box){
	data.forEach(function(val,index){//val为内容 index为索引
	 var str=`<p><u onclick="getxxx(${val.cid})">${val.cname}</u><span onclick="getxxx(${val.cid})">查看全部</span></p>`
	 // 创建主页中间盒子里头部大标题部分盒子结构 并导入数据 以静态结构为标准 绑定点击事件 参数为分类大标题数据的id
	  $(box).prepend(str)
	 // 添加入盒子开头
	 	 	 			
})
}


// 封装appendname方法 添加主页轮播图下面的分类部分 参数为父盒子名
function appendname(ul){
	var i=0; //此变量控制背景图标的位置 非必须 看需求
	data.forEach(function(val,index){
		i++;//非必须
		var str=`<li onclick="getxxx(${val.cid})">
	  		<a href="">${val.cname}</a>
	  		<div class=" image background${i}">
  		</div>
  	</li>`//建立一个li标签 循环追加 数据有几条就会添加几个
  	$(ul).append(str)
  	// 在将str添加到ul里面 ul为型参
	})
	var str1=`<li>
	  	<a href="">二次元</a>
	  	<div class="image background9">
	  		</div>
  	</li>
  	<li>
	  	<a href="">旅游展览</a>
	  	<div class="image background10">
	  		</div>
  	</li>`
  	$(ul).append(str1) //添加两个li为凑样式的 无任何功能 因为老师给的数据只有8个 而主页样式有10个
}



