<?php 

 $a = fopen('demo.txt', 'r');
 $read = fread($a, filesize('demo.txt'));

 $arr = explode('/n',$read); // Explode is use for convert string to array.
foreach ($arr as $key) {
	echo $key."<br>";
}

$str = implode(' , ', $arr); //Implode is use for convert array to string.
echo $str;
?>