<?php
header("content-type:text/html;charset=utf-8");
$user = $_POST["user"];
$pwd = $_POST["pwd"];
  $tel = $_POST["tel"];
     // 查询数据库
$link = mysqli_connect("127.0.0.1","root","root","k8911");
mysqli_set_charset($link,"utf8");
$sql = "select * from user where username='$user'";

$result = mysqli_query($link,$sql);
mysqli_fetch_row($result);
mysqli_free_result($result);
mysqli_close($link);
if($row){
	echo 0;
}else{
	echo 1;
}
?>