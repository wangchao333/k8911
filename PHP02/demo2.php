<?php
 echo "<pre>";
   print_r($_FILES);
   echo "</pre>";
foreach ($_FILES["upfiles"]["error"] as $v) {
	echo $v."<br>";
}
  
?>  