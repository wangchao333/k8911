<?php

   header("content-type:text/html;charset=utf-8");
     
	 //引入函数文件
	      //寻找几个分页变量
	     
	     //$page =   $page  $_GET["page"];
	     if($_GET["page"] ==null){
	     	
			$page = 1; //当前页 
	     }else{
	     	$page = $_GET["page"];
	     }
	     
	    $pageSize = 10; //每一页显示的记录条数
	 
	     //****
	      //起始值
	     $start = ($page-1)*$pageSize;
		 
		 // 上下页码
		 $next = $page+1;
		 $prev = $page-1;
		 
		 // 页码边界限制
		  if($page <=1){
		  	
			$page =1;
			  $prev =1;
		  }
		 
		 
		 
	      
	 include "mysql.func.php";
	 
	  $link = conn("127.0.0.1", "root", "root", "k8911");
	   // 第一页数据  
	  $arr= select($link, "stus","*",null,null,null,"$start,$pageSize");
	
	   //  page 当前页 1 ----》  0start   0
	    ///          2----->10        20
	    //----------    3----->20
	    // 求尾页   ceil (数据总数/$pagesize)
	    
	    // 数据总数
	    
	     $rowCount = select($link, "stus","count(1) sum");
		 
		 
		 // 尾页
		  $totalPage = ceil($rowCount[0]["sum"]/$pageSize);
		  
		  // 判断 尾页越界
		  
		  if($page >= $totalPage){
		  	
			$page = $totalPage;
			  $next = $totalPage;
		  }
		  
		  //echo $totalPage;
		 
		 //print_r($rowCount); //array(0=>array("sum"=>303))
	   
	    
	
	
	
	
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
		  	<form method="post" action="del.php">
		  	<?php 
		  	   foreach($arr as $v){
		  	 ?>
		  	
		  	<tr>
		  		<th><input type="checkbox" name="ids[]"  value="<?php echo $v["sid"];?>" /></th>
		  		<td><?php echo $v["sid"];?></td>
		  		<td><a href="save.php?id=<?php echo $v["sid"];?>"><?php echo $v["name"];?></a></td>
		  		<td><?php echo $v["sex"];?></td>
		  		<td><?php echo $v["cname"];?></td>	
		  		<td><?php echo $v["score"];?></td>
		  		<td><a href="del.php?ids=<?php echo $v["sid"];?>">删除</a></td>
		  	</tr>
		  	
		  	
		  	<?php
			   }
		  		?>
		  	
		  	<tr>
		  		<td colspan="7" align="center">
		  		当前第<?php echo $page;?>页 共<?php echo $totalPage;?>页
		  			<input type="submit" name="" id="" value="删除选中" />
		  			<input type="button" name="" onclick="add()" value="新增数据" />
		  			<a href="page.php?page=1">首页</a>
		  			<a href="page.php?page=<?php echo $prev;?>">上一页</a>
		  			<a href="page.php?page=<?php echo $next;?>">下一页</a>
		  			<a href="page.php?page=<?php echo $totalPage;?>">尾页</a>
		  		 </td>
		  	</tr>
		  	</form>
		  </table>
	</body>
	<script type="text/javascript">
		
		  function add(){
		  	
		  	window.location.href="add.html";
		  	
		  }
		
	</script>
	
	<script type="text/javascript">
		
		 document.getElementById("all").onclick=function(){
		 	
		 	   var ids = document.getElementsByName("ids[]");
		 	   
		 	   if(this.checked){
		 	   	
		 	   	   for(k in ids){
		 	   	   	
		 	   	   	    ids[k].checked = true;
		 	   	   }
		 	   	
		 	   }else{
		 	   	   for(k in ids){
		 	   	   	
		 	   	   	    ids[k].checked = false;
		 	   	   }
		 	   }
		 	   
		 	
		 	
		 }
		 
		 
		 
		 
		
		
	</script>
</html>
	

    