<?php



// php 操作mysql增删改查 

   //链接数据库
   
      function conn($host,$user,$password,$database,$charset="utf8"){
      	$link = mysqli_connect($host, $user, $password, $database);
	
	    mysqli_set_charset($link, $charset);
	
//		var_dump($link);

        return $link;
      }


   


  // 查询 
  
  
  function select($link,$tbName,$cols="*",$where="",$group="",$order="",$limit=""){
  	
	  // 传递 条件
	  if($where != ""){
	  	
		$where = " where ".$where;
	  }
	  
	    if($group != ""){
	  	
		$group = " group by ".$group;
	  }
	  
	      if($order != ""){
	  	
		$order = " order by ".$order;
	  }
	
	      if($limit != ""){
	  	
		$limit = " limit ".$limit;
	  }
	  // 组装select 语句
	 $sql = "select $cols from $tbName $where $group $order $limit";
	 
	 echo $sql;
	 
	  $result =  mysqli_query($link, $sql);
	  
	  if($result === flase){
	  	exit("查询语句有误!!!");
	  }else{
	  	
		   $arr = mysqli_fetch_all($result,MYSQLI_ASSOC);
	  }
	
	     mysqli_free_result($result);
		 
		 return $arr;  // 返回数据
		 
		 
	
  }
  $link =conn("127.0.0.1", "root", "root", "k8911");
  //$arr= select($link,"stus","name,sid");

  // 删除
  function del($link,$tbName,$where){
  	//组装sql语句 
  	
  	if($where == null){
  		$sql = "truncate $tbName";
		
  	}else{
  			$sql = "delete from $tbName  where $where";
  	}
  
	//echo $sql;
	
	  mysqli_query($link, $sql);
	  
	  
	  return  mysqli_affected_rows($link);
  }
  
 // echo del($link, "stus","sid=100");
  // print_r($arr);
  // 新增
  function add(){
  	
	
	
  }
  
  
  
  
  //修改
  function save(){}
