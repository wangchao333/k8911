<?php
$code="";
//画布
$image=imagecreatetruecolor(80, 25);
imagefill($image, 0, 0, imagecolorallocate($image, 255, 255, 255));
     
for($i=0;$i<6;$i++){
    $rand_color=imagecolorallocate($image, rand(0,155), rand(0,155), rand(0,155));
    $code_tmp=dechex(rand(1,15));
    $code.=$code_tmp;
    imagestring($image, rand(4,5), rand($i*20,$i*20+20-6), rand(0,13),$code_tmp , $rand_color);  
  
}
//保存
session_start();
session_write_close();
$_SESSION['yzm']=$code;
header("content-type:image/png");
imagepng($image);
imagedestroy($image);
?>