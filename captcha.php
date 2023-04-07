<?php
define('allow', true);
include($_SERVER['DOCUMENT_ROOT'].'/includes.php');

$captcha = rand(1000, 9999);
   

$_SESSION["captcha"] = $captcha;  
   
$im = imagecreatetruecolor(50, 36);  
  
$bg = imagecolorallocate($im, 18, 26, 51);
  
$fg = imagecolorallocate($im, 255, 255, 255);
   
imagefill($im, 0, 0, $bg); 
   
imagestring($im, 7, 6, 8,  $captcha, $fg);
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header('Content-type: image/png');
imagepng($im); 
  
// Free memory
imagedestroy($im);
?>