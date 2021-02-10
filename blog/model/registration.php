<?php
	
	require 'connection.php';

	if (isset($_POST['submit'])) {

	$prifix = $_POST['prifix'];	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$password = $_POST['password'];
	$information = $_POST['information'];

	$obj = new DataBaseOperation();

	$query = "INSERT INTO `registration`(`id`, `prifix`, `firstname`, `lastname`, `email`, `phonenumber`, `password`, `information`) VALUES (NULL,'$prifix','$firstname','$lastname','$email','$phonenumber','$password','$information')";
	$obj->insertData($query);
}

?>