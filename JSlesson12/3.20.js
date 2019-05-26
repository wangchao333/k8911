
 // 1.点击全选时触发事件
 
 // 获取到全选选择框节点
 var allCheckBox = document.getElementById("allCheckBox");
   // 获取下列商品列表里的每一个选择框节点
var bkk = document.getElementsByClassName("bkk");
allCheckBox.onclick = function(){
	for(var i in bkk){
		// 将每一个框的属性变更为全选框属性为一致
		bkk[i].checked = allCheckBox.checked;
	} 
}
	// 如果有一个框未被选中，则取消全选状态
	for(var i = 0;i < bkk.length;i++){
		// 给每个框加点击事件
		bkk[i] .onclick = function(){
			// 获取到每一个框的状态
			for(var j = 0;j < bkk.length;j++){
				// 偏历每一个框如果有一个没选中则取消全选状态
				if(bkk[j].checked == false){
					allCheckBox.checked = false;
				}else if(bkk[j].checked == true){
					allCheckBox.checked = true;
				}
			}
		}
	}

         // 获取到加号节点
 var add = document.getElementsByName("add");
 // 2.点击添加按钮时增加商品件数 
for(var i = 0;i < add.length;i++){
      add[i].onclick = function(){
      	// 通过上一个兄弟节点获取到input框
      	idm = this.previousSibling.previousSibling;
      	// 通过点击加号来增加input里面的value的值
      	idm.value = parseInt(idm.value)+1;
      	// 在点击加号的时候调取已经封装好的函数实现自动计算小计金额
      	productCount();
      
      }
 	}
 	// 3.点击减少按钮时减少商品件数 
 for(var i = 0;i < jian.length;i++){
 	jian[i].onclick = function(){
 		// 获取到减号节点
 		var jian = document.getElementsByName("jian");
 			// 通过下一个兄弟节点获取到input框
 		bm = this.nextSibling.nextSibling;
 		// 通过点击减号来减少input里面的value的值
 		bm.value = parseInt(bm.value)-1;
          // 对input框进行数量的控制
 		if(bm.value < 1){
 		   bm.value = 1;

    }
     productCount();
 	}
}
     // 4.删除单行功能
     // 获取到删除的节点
     var del = document.getElementsByName("del");
    for(var i = 0;i < del.length; i++){
    	// 给每一个删除绑定点击事件
	del[i].onclick = function(){
		  // 通过父节点获取到上一个父节点的整个tr
		var index = this.parentNode.parentNode.rowIndex;
		document.getElementById("shopping").deleteRow(index);
		document.getElementById("shopping").deleteRow(index-1);
		productCount();
	}
}
    // 删除所选
    // 获取删除所选按钮  
    var del = document.getElementById("del");
    // 给删除所选按钮 绑定点击删除事件
     del.onclick = function(){
     	// 因为删除后，长度会有变化导致bug
        for(var i = bkk.length - 1;i >= 0;i--){
        	// 让选择框状态为勾选的时候
        if(bkk[i].checked == true)
        	// 获取到点击框的整个tr
        	var tr = bkk[i].parentNode.parentNode;
        	// 获取到点击框整个tr的上一个节点
            var prev = tr.previousElementSibling;
            // 通过找到点击框整个tr的父节点后，让父节点对它的子节点进行移出
            tr.parentNode.removeChild(tr);
             // 通过找到点击框整个tr上一个节点的父节点后，让父节点对它的子节点进行移出
            prev.parentNode.removeChild(prev);
        }
      }
    
    
     // 5.小计金额
     // 封装自动计算功能块
   function productCount(){
	var total = 0;
	var intergral = 0;
	var point ;
    var price;
	var number;
	var subtotal;
        // 获取到所有的tr
	var tabTr = document.getElementById("shopping").getElementsByTagName("tr");
	    // 只需要计算后面几行的tr
	for(var i = 3;i < tabTr.length;i=(i+2)){
		if(tabTr.length > 0){
			// 获取到每一行的td
			var tds = tabTr[i].getElementsByTagName("td"); 
                 // 获取到积分
		   point = tds[3].innerHTML; 
		   // 获取到每一个单价
			price = tds[4].innerHTML; 
			// 获取到每一个商品数量
			number = tds[5].getElementsByTagName("input")[0].value;
			// 获取到总积分
          intergral += point*number;
          // 获取到总金额的结果
          total += price*number;
			// 获取到单价乘以商品数量的乘积
			subtotal = price*number;
			// 得到小计金额
           tds[6].innerHTML = subtotal;
        
		}
		// 输出结果为总金额
   document.getElementById("total").innerHTML = total;
   // 输出结果为总积分
   document.getElementById("integral").innerHTML = intergral;
}
}
    // 调取函数
   productCount();
