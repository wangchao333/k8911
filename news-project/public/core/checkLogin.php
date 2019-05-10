<?php

 header("content-type:text/html;charset=utf-8");
   include "../public/core/mysql.func.php";
   
   $link =conn("127.0.0.1", "root", "root", "news");
   // 处理 登录 
   session_start();
   //print_r($_POST);
   
   $user = $_POST["userName"];
   $pwd = $_POST["password"];
   
   $code = $_POST["checkCode"];
   
   $trueCode = $_SESSION["verify"];
   
   //echo $code."====".$trueCode;
   //  比对验证码  真实验证码
   if( $code == $trueCode){
   	
	   // 验证码比对通过 
	   
	    $row = select($link, "manager","*","userName ='$user' and password ='$pwd' ");
	  
	  
	     if($row){
	     	// 登录 成功   保存 用户信息
	     	$_SESSION["userinfo"] = $row[0];
	     	 
			
	     	 echo "<script>";
	  echo "alert('登录成功，点击进入后台管理!');";
	  echo "location.href='../admin/index.php';";
	   echo "</script>";
			
	     }else{
	     	
			header("location:index.php");
	     }
	   //print_r($row);
	   
   }else{
   	
	  echo "<script>";
	  echo "alert('验证码输入有误!!');";
	  echo "location.href='index.php';";
	   echo "</script>";
   }
   
   