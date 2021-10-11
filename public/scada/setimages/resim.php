<?php

$veri=@$_GET["value"];
$name=@$_GET["name"];
$status=@$_GET["status"];
$type=@$_GET["type"];

 

function lencontrol($name){
    if(strlen($name)>11){
        $name= substr($name, 0, 11);
        $name=$name."..";
    } 

    return $name;
}

 
if($status==0){
    
    $image = imagecreatefromstring(file_get_contents('eskiimg/'.$type.'.gif'));

    $bg = imagecolorallocate($image,0, 0, 0);
    $textcolor = imagecolorallocate($image,250, 250, 250);
    $font=realpath('font/arialbd.ttf');
    $font2=realpath('font/digital-7.ttf');


  

    $dimensions = imagettfbbox(9, 0, $font, $name);
    $textWidth = abs($dimensions[4] - $dimensions[0]);   
    $x = imagesx($image) - $textWidth;
    if($x<=0) {$x=2;}


 
    $name=lencontrol($name);
    imagettftext($image, 9, 0, $x/2, 25, $textcolor, $font, $name); 

    
}else if($status==1){
     
    $name=lencontrol($name);
    $image = imagecreatefromstring(file_get_contents('yeniimg/'.$type.'.gif'));
    $bg = imagecolorallocate($image,0, 0, 0);
    $textcolor = imagecolorallocate($image,250, 250, 250);
    $font=realpath('font/arialbd.ttf');
    $font2=realpath('font/digital-7.ttf');
    
    $dimensions = imagettfbbox(9, 0, $font, $name);
    $textWidth = abs($dimensions[4] - $dimensions[0]);   
    $x = imagesx($image) - $textWidth;
    if($x<=0) {$x=2;}
    imagettftext($image, 9, 0, $x/2 , 17, $textcolor, $font, $name);
    imagettftext($image, 12, 0, 48, 33, $textcolor, $font2, $veri);


}
 
 


//$image = imagecreate(110, 40);
  

 
header('Content-type: image/png');

imagepng($image);
imagedestroy($image);
 
?>