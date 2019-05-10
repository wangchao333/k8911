<?php
function checkLogin($db){ 
header("content-type:text/html;charset=utf-8");
 include "../public/core/mysql.func.php";
 
 $link = conn("127.0.0.1", "root", "root", $db);
	  session_start();
	    // 非法请求验证 
	    
	      if(!$_SESSION["userinfo"]){
	      	     	 echo "<script>";
	  echo "alert('非法请求，请先登录!!!');";
	  echo "location.href='../home/index.php';";
	   echo "</script>";
			             
						    exit();      
	      }
	    
		//print_r($_SESSION["userinfo"]);
		return $link;
}

  $link = checkLogin("news");
?>