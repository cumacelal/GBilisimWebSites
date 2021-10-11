<?php
 
$status=@$_GET["status"];
 

 

 

 
     
    
    $image = imagecreatefromstring(file_get_contents('gpsicon.gif'));
    $bg = imagecolorallocate($image,0, 0, 0);
    $textcolor = imagecolorallocate($image,255, 255, 255);
    $font=realpath('font/arialbd.ttf');
    $font2=realpath('font/digital-7.ttf');
    
    $dimensions = imagettfbbox(20, 0, $font2, $status);
    $textWidth = abs($dimensions[4] - $dimensions[0]);   
    $x = imagesx($image) - $textWidth;
    if($x<=0) {$x=2;}
    imagettftext($image, 20, 0, $x/2.1, 38, $textcolor, $font, $status); 


 


//$image = imagecreate(110, 40);
  

 
header('Content-type: image/png');

imagepng($image);
imagedestroy($image);
 
?>