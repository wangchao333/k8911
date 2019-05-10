  <?php
  
  include "../public/core/mysql.func.php";
  $link = conn("127.0.0.1","root","root","K1997");
  
  
  
  $arr = select($link, "newstypes");

  //var_dump($arr);
?>
  <div class="headDiv">
  <div class="head1">www.<b>ttnewS</b>.com</div>
  <div class="head2"><img src="../public/images/banner17.gif" width="350"></div>
</div>
<div class="head3">天天新闻网</div>
<div class="head4">
  <a href="index.php" class="a">主页</a> | 
<?php 
	 foreach($arr as $v){
	 	
	?>
  <a href="list.php?typeid=<?php echo $v["typeId"];?>" class="a"><?php echo $v["typeName"];?></a> |
  <?php
  }
  	?>
  
  <a href="search.php" class="a">搜索</a> 
</div>