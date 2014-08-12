<?php
$folder = '../img/uploads/';
$uploadfile = $folder . basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
?>