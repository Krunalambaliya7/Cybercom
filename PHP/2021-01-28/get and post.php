<?php 

if(isset($_POST['Submit']))
{
	$post_name = $_POST['name1'];
	$post_age = $_POST['age1'];
	echo "This form is use the POST method <br>";
	echo "Name:".$post_name."<br>";
	echo "Age:".$post_age."<br>";
}
else if(isset($_GET['Submit']))
{
	$get_name = $_GET['name'];
	$get_age = $_GET['age'];
	echo "This form is use the GET method <br>";
	echo "Name:".$get_name."<br>";
	echo "Age:".$get_age."<br>";
}
?>