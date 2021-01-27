<?php

	$str = 'Krunal Ambaliya';
	
	echo strlen($str).'<br>'; //return the length of the string.

	echo strtolower($str).'<br>'; //convert the string in lowercase. 

	echo strtoupper($str).'<br>'; //convert the string to uppercase.

	echo strpos($str, 'na').'<br>'; //this function is use to find the given substring's positiin.
	
	echo str_replace('Krunal','Kaushal' , $str);


 ?>