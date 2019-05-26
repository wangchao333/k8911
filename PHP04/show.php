<?php

   header("content-type:text/html;charset=utf-8");
   
    $link = mysqli_connect("127.0.0.1", "root", "root", "k8911");
	
	mysqli_set_charset($link, "utf8");
	
	$sql = "select * from class c join stus s on c.cid=s.cid order by sid desc";
	
	$result = mysqli_query($link, $sql);
    
    $arr = mysqli_fetch_all($result,MYSQLI_ASSOC);
	
	mysqli_free_result($result);
	
	mysqli_close($link);
	
//	echo "<pre>";
//	print_r($arr);
//	echo "</pre>";
	
	?>
	
	<html>
	<head>
		<title>
			
			
			
			
		</title>
	</head>
	<body>
		  <table border="1" cellspacing="0"  width="500" align="center">
		  	<tr>
		  		<th><input type="checkbox" name="all" id="all" value="" /></th>
		  		<th>学号</th>
		  		<th>姓名</th>
		  		<th>性别</th>
		  		<th>班级</th>
		  		<th>分数</th>
		  		<th>操作</th>
		  		
		  	</tr>
		  	
		  	<?php 
		  	   foreach($arr as $v){
		  	 ?>
		  	
		  	<tr>
		  			<th><input type="checkbox" name="ids"  value="" /></th>
		  		<td><?php echo $v["sid"];?></td>
		  		<td><a href="save.php?id=<?php echo $v["sid"];?>"><?php echo $v["name"];?></a></td>
		  		<td><?php echo $v["sex"];?></td>
		  		<td><?php echo $v["cname"];?></td>	
		  		<td><?php echo $v["score"];?></td>
		  		<td><a href="del.php?id=<?php echo $v["sid"];?>">删除</a></td>
		  	</tr>
		  	
		  	
		  	<?php
			   }
		  		?>
		  	
		  	<tr>
		  		<td colspan="7" align="center">
		  			<input type="button" name="" id="" value="删除选中" />
		  			<input type="button" name="" onclick="add()" value="新增数据" />
		  			<a href="">首页</a>
		  			<a href="">上一页</a>
		  			<a href="">下一页</a>
		  			<a href="">尾页</a>
		  		 </td>
		  	</tr>
		  	
		  </table>
	</body>
	<script type="text/javascript">
		
		  function add(){
		  	
		  	window.location.href="add.html";
		  	
		  }
		
	</script>
</html>
	

    