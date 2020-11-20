<?php

$name=$_FILES['file']['name'];
$filename=$_FILES['file']['tmp_name'];
$destination="..\images/".$name;
move_uploaded_file($filename,$destination);
echo "File uploaded successfully";
?>