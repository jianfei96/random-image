<?php
define('IMAGEPATH', 'img/');
foreach(glob(IMAGEPATH.'*.{jpg,JPG,jpeg,JPEG,png,PNG}',GLOB_BRACE) as $filename){
    $images[] =  basename($filename);
}
$rand_key = array_rand($images, 1);
?>
