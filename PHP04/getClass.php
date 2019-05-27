<?php


    $link = mysqli_connect("127.0.0.1", "root", "root", "k8911");
	
	mysqli_set_charset($link, "utf8");
	
	// 组装sql语句
	  $sql = "select * from class";
	  
	  ///echo $sql;

	    $result =  mysqli_query($link, $sql);  //结果集对象
	    
	    // mysqli_fetch_all($result)   ; // 数组  
	    
	    $row = mysqli_fetch_all($result,MYSQLI_ASSOC); // null   array
	    
	    mysqli_free_result($result);
		
		mysqli_close($link);
		
		//print_r($row);
		
		// 转json
		echo json_encode($row);
