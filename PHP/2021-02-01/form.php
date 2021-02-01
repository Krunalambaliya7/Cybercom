<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'practice';

$con = mysqli_connect($host,$user,$pass,$db) or die('Could not connect.'); 


/*$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$birth_date = $_POST['date'];

$insert = "INSERT INTO `user_info` (`id`, `name`, `e-mail`, `password`, `birth date`) VALUES (NULL, '$name', '$email', '$password', '$birth_date')";*/

//mysqli_query($con,$insert);

$select = "SELECT * FROM user_info";
$result = mysqli_query($con,$select);



while ($arr = mysqli_fetch_assoc($result)) {
	echo $arr['id']." ".$arr['name']." ".$arr['e-mail']." ".$arr['birth date']."<br>";
}

?>