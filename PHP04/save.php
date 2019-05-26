<?php
    // 接收 要修改 学生 id
    
    $id = $_GET["id"];
	
	//echo $id;
  // 查询学生信息
  
  
    $link = mysqli_connect("127.0.0.1", "root", "root", "k8911");
	
	mysqli_set_charset($link, "utf8");
	
	// 组装sql语句
	  $sql = "select * from stus where sid=$id";
	  
	  ///echo $sql;

	    $result =  mysqli_query($link, $sql);  //结果集对象
	    
	    // mysqli_fetch_all($result)   ; // 数组  
	    
	    $row = mysqli_fetch_row($result); // null   array
	    
	    mysqli_free_result($result);
		
		mysqli_close($link);
		
		print_r($row);

?>

<html>
	<head>
		<title>
			
		</title>
		<meta name="" charset="utf-8" content=""/>
	</head>
	<body>
		
		<form action="saveAction.php" method="post">
			
			<input type="hidden" name="id" id="" value="<?php echo $id;  ?>" />
		 <table border="1" height="500" cellspacing="0" width="500" align="center" cellpadding="">
		 	<tr>
		 		<th colspan="2">新增学生</th>
		 		
		 		
		 	</tr>
		 	<tr>
		 		<td>学生姓名:</td>
		 		<td><input type="text" name="userName" id="userName" value="<?php echo $row[1];?>" /></td>
		 		
		 	</tr>
		 	<tr>
		 		<td>性别:</td>
		 		<td>
		 			<select name="sex">
		 			<option  value="男">男</option>
		 			<option value="女">女</option>
		 			</select>
		 		</td>
		 		
		 	</tr>
		 	<tr>
		 		<td>班级:</td>
		 		<td>
		 			<select name="cid">
		 				
		 					<option value="">请选择</option>
		 			</select>
		 		</td>
		 		
		 	</tr>
		 	<tr>
		 		<td>成绩:</td>
		 		<td>
		 			<input type="number" name="score" id="score" value="<?php echo $row[4];?>" />
		 		</td>
		 		
		 	</tr>
		 	
		 	<tr>
		 	
		 		<td colspan="2" align="center"> 
		 			 <input type="submit" name="" id="" value="修改" />
		 			 <input type="reset" name="" id="" value="清除" />
		 		</td>
		 		
		 	</tr>
		 	
		 </table>
		 </form>
		
	</body>
	<script src="../jq-day01/js/jquery3.min.js"></script>
	<script type="text/javascript">
		
		$(function(){
			
			// 调 class 数据接口
			
			$.ajax({
				
				url:"getClass.php",
				type:"post",
				dataType:"json",
				async:false, //同步
				
				success:function(res){
				//console.log( res) //字符串
				
				  //res= jsonParse(res)
				
				// res= eval("("+res+")") // json字符串 转化为 json对象
				  //console.log(res);
				  
				  for(k in res){
				  	 var ops = `<option value='${res[k].cid}'>${res[k].cname}</option>`;
				  	$("[name='cid']").append(ops)
				  }
				  
				 
				// 选择 男还是女
		
	     var sex = "<?php echo $row[2];?>";
		
		//console.log(sex)
		  $("[value='"+sex+"']").prop("selected",true);
		   
				 
				 	var cid = "<?php echo $row[3];?>";
		console.log(cid);
		
		console.log($("[value='1']"))
		 $("[value='"+cid+"']").prop("selected",true);
				  
			}
			
		})
		
	})	
		
		  
		
		// 班级
	
	</script>
</html>