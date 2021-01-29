<?php

$file_name = $_FILES['file']['name']; //besause it is associative array.
$temp_name = $_FILES['file']['tmp_name'];
$location = 'files/';


move_uploaded_file($temp_name, $location.$file_name);
?>