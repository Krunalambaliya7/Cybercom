<?php 
if(isset($_POST['Submit']))
{
	$post_name = htmlentities($_POST['name']);
	$post_age = htmlentities($_POST['age']);
	echo "Name:".$post_name."<br>";
	echo "Age:".$post_age."<br>";
}
?>