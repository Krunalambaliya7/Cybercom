<?php
include 'connection.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$birth_date = $_POST['date'];

$insert = "INSERT INTO `user_info` (`id`, `name`, `e-mail`, `password`, `birth date`) VALUES (NULL, '$name', '$email', '$password', '$birth_date')";
if(mysqli_query($con,$insert)){
	echo "Data inserted successfully.";
}
?>