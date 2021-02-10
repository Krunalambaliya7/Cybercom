<?php
	session_start();
	require 'model/connection.php';

	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$obj = new DataBaseOperation();

		$query = "SELECT * FROM registration";

		$res = $obj->selectData($query);

		foreach ($res as $key) {
			if ($key['email'] == $email) {
				echo "Login succsessfully";
				$key['id'] = $_SESSION['user'];
				break;
			}
			else
			{
				echo 'Not a user.';
			}
		}

	}

?>