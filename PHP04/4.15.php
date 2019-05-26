<?php
// phpinfo();
 $host = "127.0.0.1"; 
 $user = "root";
 $pwd = "roots";
 $database = "k9907" ;
    // 连接数据库，选择指定的库
    $link = mysqli_connect($host,$user,$pwd,$database) or die("数据链接失败");
    // 设置编码
    mysqli_set_charset($link,"utf8");
    // 执行sql  查询
    $sql = "select * from";
    // 执行sql语句
    mysqli_query($link,$sql); 
    if($result === FALSE){
    	exit("sql语句拼写有误");
    }else{
        // 解析所有数据
    mysqli_fetch_all($result);
    $arr = mysqli_fetch_all($result,MYSQL ASSOC);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
     // 释放结果集
    mysqli_free_result($result);
    // 关闭数据库
   
   mysqli_close($link);
   
    }
   
?>
