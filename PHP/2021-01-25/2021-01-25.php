<?php
	
	/*
	//die and exit functions.

	echo "Hello ";
	//die('Error');
	exit('Error');
	echo 'World';
	*/ 



/*
	//preg_match() function.

	$str = 'This is string.';

	if (preg_match('/is/',$str)) {
		echo "Found.";
	}
	else{
		echo "not found";
	}
*/


/*
	//Basic functions with arguments and return value.

	function add ($a,$b){
		return ($a+$b);
	}

	$c=add(10,5);
	echo $c;
*/

/*
	//Global variables.

	$str = 'Hey there!';

	function S (){
		global $str;
		$name = 'Krunal';
		echo $str.' '.$name;
	}
	s();
*/

	//String functions.

	$str = 'Hey there!';
	$str1 = 'Hey there! Krunal';
	echo str_word_count($str,0)."<br>"; //return int value
	print_r (str_word_count($str,1)); //return assosiate array
	print_r (str_word_count($str,2)); //return assosiate array with stating index of that word

	echo strlen($str)."<br>"; //return length of string.

	echo str_shuffle($str)."<br>"; //shuffle the string characters.

	echo substr($str, 0, strlen($str)/2)."<br>"; //Give substring to the given position.

	echo strrev($str)."<br>"; //return the reverse string.

	echo similar_text($str, $str1)."<br>";

	$str3 = 'Hey <img src="im.jpg">';
	echo addslashes($str3);

?>