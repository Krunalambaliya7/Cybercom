<?php 

//MD5 encryption is convert the string to the hash code.
//We cann't perform the reverse opration .
//For this we perform the comparision of both string's hash code. 

	if (isset($_POST['password'])) {
		$password = $_POST['password'];

		$hash_password = md5($password);

		$file_name = 'hash.txt';
		$handle = fopen($file_name, 'r');
		$file_password = fread($handle, filesize($file_name));

		if ($hash_password == $file_password) {
			echo 'Correct password';
		}
		else{
			echo 'Enter Correct password.';
		}
	}

	else{
		echo "Please enter the password.";
	}
?>


