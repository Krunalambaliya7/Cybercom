<?php 
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'practice';

	$con = mysqli_connect($host,$user,$pass,$db) or die('Could not connect.');

	if (isset($_POST['name'])) {
		$name = $_POST['name'];
	$like = "SELECT `name` FROM user_info WHERE `name` LIKE '%".$name."%'";

	$result = mysqli_query($con,$lke);

	echo $result;
	}
?>

<form method="POST" action="like.php">
	<center>Name:<input type="text" name="name" required=""></center><br><br>
	<center><input type="submit" name="Search"></center>
</form>