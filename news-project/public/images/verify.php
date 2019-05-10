<?php
  header("content-type:image/jpeg");
  session_start();
  //创建画布(真色彩)
  $width = 100;
  $height=40;
  $image= imagecreate($width, $height);
  //填充颜色
  $bg = imagecolorallocate($image,255,204,153);
  
  //制作验证码
   $str = range(0, 9);
   $str = join("", $str);
   $str = substr(str_shuffle($str), 0,4); //真实验证码
   $_SESSION["verify"] = $str; //4396
   
   //将验证码数字 写入图片
   for($i=0;$i<strlen($str);$i++){
   $color = imagecolorallocate($image, mt_rand(0, 255), mt_rand(0, 255),mt_rand(125,255));
   imagettftext($image, 20, mt_rand(-15, 25), 10+20*$i, 30, $color,"../font/SIMHEI.TTF" , $str{$i});
   }
   
   //制造干扰元素 点
   for($i=0;$i<150;$i++){
   	$color = imagecolorallocate($image, mt_rand(0, 255), mt_rand(0, 255),mt_rand(125,255));
   	  imagesetpixel($image, mt_rand(0, 100), mt_rand(0, 50), $color);
   }
   
   //制造线段
   for($i=0;$i<10;$i++){
   	$color = imagecolorallocate($image, mt_rand(0, 255), mt_rand(0, 255),mt_rand(125,255));
	imageline($image, mt_rand(0, 100), mt_rand(0, 50),mt_rand(0, 100), mt_rand(0, 50), $color);
   }
  //imagecolorclosest($image, 255, 255, 255);
 // ob_clean();
 //输出图片
  imagejpeg($image);
  
  // 销毁图片资源
  
  imagedestroy($image);
  
?>