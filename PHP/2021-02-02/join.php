<?php 
$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'practice';

	$con = mysqli_connect($host,$user,$pass,$db) or die('Could not connect.');


	$join = "SELECT `name`.`name`,`e-mail`.`email` FROM `name` JOIN `e-mail` ON `name`.`id`=`e-mail`.`user_id`";

	$result = mysqli_query($con,$join);

	while ($arr = mysqli_fetch_assoc($result)) {
		echo $arr['name']."   ".$arr['email']."<br>";
	}
?>