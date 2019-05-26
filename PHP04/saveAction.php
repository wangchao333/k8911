<?php

   // 修改数据
   
   // 接收修改的数据
   header("content-type:text/html;charset=utf-8");
print_r($_POST);

  // 接收新增用户数据
  
    $user = $_POST["userName"];
	$sex = $_POST["sex"]; // 加密
	$cid = $_POST["cid"];
	$score = $_POST["score"];
	
	$id = $_POST["id"];
	//操作数据库执行修改
	//exit();
    $link = mysqli_connect("127.0.0.1", "root", "root", "k8911");
	
	mysqli_set_charset($link, "utf8");
	
	// 组装sql
	$sql = "update stus set name='$user',sex='$sex',cid='$cid',score='$score' where sid=$id";
	
	//echo $sql;
	
	//exit;
	// 执行语句
	  mysqli_query($link, $sql);
	  
	  
	  // 受影响 行数值
	  
	  $rows = mysqli_affected_rows($link);
	  
	  mysqli_close($link);
	  

	 // var_dump($rows);
	 
	   if($rows > 0){
	   	
		
		 header("location:show.php");
	   }else{
	   	header("location:save.php?id=".$id);
	   }
	
	