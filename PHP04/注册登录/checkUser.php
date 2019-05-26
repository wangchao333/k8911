<?php
 header("content-type:text/html;charset=utf-8");
  //接收 用户名 
  
   $user = $_POST["user"];

   
   //print_r($_POST);
   
   // 查询数据库 
   
    $link = mysqli_connect("127.0.0.1", "root", "root", "k8911");
	
	mysqli_set_charset($link, "utf8");
	
	// 组装sql语句
	  $sql = "select * from users where username ='$user'";
	  
	  ///echo $sql;

	    $result =  mysqli_query($link, $sql);  //结果集对象
	    
	    // mysqli_fetch_all($result)   ; // 数组  
	    
	    $row = mysqli_fetch_row($result); // null   array
	    
	    mysqli_free_result($result);
		
		mysqli_close($link);
	    
	    if($row){
	    	
			echo 0;  // 不能注册
	    }else{
	    	echo 1; // 能注册
	    }
	    
	    