<?php 
session_start();

$captcha_num = md5(rand());
$captcha_num = substr(str_shuffle($captcha_num), 0, 6);
$_SESSION['code'] = $captcha_num;

$font_size = 60;
$image_width = 200;
$image_height = 80;
$font = __DIR__ . '/arialbd.ttf';
$image = imagecreate($image_width, $image_height);

imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 255);
imagettftext($image, 30, 0, 30, 55, $text_color, $font, $captcha_num);
$line_color = imagecolorallocate($image, 64,64,64); 
for($i=0;$i<6;$i++) {
    imageline($image,20,rand()%80,180,rand()%80,$line_color);
}
//imagettftext($iamge, $font_size, 0, 70, 30, $text_color, $font, '$captcha_num');

header('Content-type: image/jpeg');
imagejpeg($image);

imagedestroy($image);