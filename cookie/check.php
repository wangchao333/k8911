<?php

  header("content-type:text/html;charset=utf-8");
  
  
    $user = $_POST["user"];
	
	$pwd = $_POST["pwd"];
	
	$type = $_POST["type"];
	
	
	//print_r($_POST);

	 $link = mysqli_connect("127.0.0.1", "root", "root","news");
	 
	 //var_dump($link); 
	 
	 // 设置编码
	  $link->query("set names utf8");   // obj.xx(0)
	  
	  
	 // 组装sql语句
	 
	   $sql = "select * from manager where userName ='$user' and password='$pwd'";
	   
	   // 执行sql语句
	   
	    $result = $link->query($sql);   // mysqli_query
		
		
		//print_r($result);
		
		$row = $result->fetch_row();  //mysqli_fetch_all
		
		print_r($row);
		
		 if($row){
		 	// 登录成功 
		 	
		 	// 记住密码
		 	
		 	if($type != null){
		 		
				$userinfo =[];
				
				$userinfo[] = $row[1];
				$userinfo[] = $row[2];
				
				//$str = "{userName:'$user',pwd:'$pwd'}";
				//$str = json_encode($userinfo);
				
				// 序列化 
				// $str= serialize($userinfo);
				
				
				//echo $str;
				//{userName:}
				//%7B%22userName%22%3A%22admin%22%2C%22pwd%22%3A%22123%22%7D
				
		     	setcookie("userName",$row[1],time()+7*24*3600);
				setcookie("pwd",$row[2],time()+7*24*3600);
				
				
		 	}
			
			//header("location:demo2.html");
			
		 }else{
		 	
			  header("location:login.html");
		 }
	 
	 