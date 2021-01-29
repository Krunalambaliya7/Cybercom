<?php 
//Word censoring
	$find = array('Krunal','Meet');
	$replace = array('K****l','M**t');

	$str = 'Krunal and Meet are best friends.';

	echo str_replace($find, $replace, $str);



	//Find and replace
	$find = $_POST['serch'];
	$replace = $_POST['replace'];
	$str = $_POST['str'];

	echo str_replace($str , $find , $replace);
?>