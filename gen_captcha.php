<?php
session_start();

//create_image(); 


//function create_image() 
//{ 
   
$md5=md5(microtime()*mktime());
$string=substr($md5,0,7);
//$captcha=imagecreatefrompng("./captcha.png");
$width=100; 
$height=100;  
$image=ImageCreate($width, $height);
$black=imagecolorallocate($image,0,0,0);
$color=imagecolorallocate($image,0,100,150);
ImageFill($image,0,0,$color);
$line=imagecolorallocate($image,23,239,239);
imageline($image,0,0,40,35,$line);
imageline($image,40,0,64,40,$line);
imagestring($image,10,20,15,$string,$black);
ImageRectangle($image,0,0,$width-1,$height-1,$color); 
$_SESSION['key']=md5($string);
header("Content-Type:image/jpeg");
echo imagejpeg($image);
 
//}
?>
