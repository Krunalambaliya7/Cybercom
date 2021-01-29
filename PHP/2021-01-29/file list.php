<?php 

$dir = 'files';
$handle = opendir($dir.'/');

 while ($file = readdir($handle)) {
 	echo '<a href = "$file" >';
 	echo $file.'<br>';
 }

 if(file_exists('demo.txt'))
 {
 	echo "File exist.";
 }
 else
 {
 	echo "File no exist.";
 }

?>