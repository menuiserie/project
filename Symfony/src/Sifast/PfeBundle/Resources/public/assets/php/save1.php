<?php
//create an empty PNG picture 
$folder = 'assets/img/uploads/';
//name’s file is the current time
$filename = strtotime("now").'.png';
$input_con = file_get_contents("php://input");
$file_patch = $folder.$filename;
file_put_contents($file_patch,$input_con);
//file’s value take the value of image data URL
$rawimage =$GLOBALS["HTTP_RAW_POST_DATA"];
$removeheader = substr($rawimage, strpos($rawimage,",")+1); 
$decode=base64_decode($removeheader);
$fopen = fopen( $file_patch, 'wb' ); 
fwrite( $fopen, $decode); 
fclose( $fopen ); 
?>