<?php
header("content-type:text/html;charset=utf-8");
//print_r($_POST);

  // 接收用户注册信息
  
    $user = $_GET["user"];
	$pwd = md5($_GET["pwd"]); // 加密
	$tel = $_GET["tel"];
	$email = $_GET["eamil"];
	
	
// 链接数据 进行添加

    $link = mysqli_connect("127.0.0.1", "root", "root", "k8911");
	
	mysqli_set_charset($link, "utf8");
	
	// 组装sql
	$sql = "insert users(userName,pwd,tel,email) values('$user','$pwd','$tel','$email')";
	
	//echo $sql;
	
	// 执行语句
	  mysqli_query($link, $sql);
	  
	  
	  // 受影响 行数值
	  
	  $rows = mysqli_affected_rows($link);
	  
	  mysqli_close($link);
	  
	  if($rows > 0){
	  	
		echo 1;
	  }else{
	  	
		echo 0;
	  }
	  
	  
	  
	
	
