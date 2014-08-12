<?php
$save = str_replace('data:image/png;base64,', '', $_POST['image'] );
file_put_contents( '../img/save/model.png', base64_decode( $save ) );

//save.php code
 
//Show the image
//echo '<img src="'.$_POST['img_val'].'" />';
 
//Get the base-64 string from data
//$filteredData=substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);
 
//Decode the string
//$unencodedData=base64_decode($filteredData);
 
//Save the image
//file_put_contents('img.png', $unencodedData);
?>
