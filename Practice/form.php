<?php 
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$time = $_POST['time'];
	$class_info = $_POST['text'];
	$gender = $_POST['gender'];

	if (isset($_POST['check'])) {
		echo 'You name is:'.$name.'<br>';
		echo 'Your e-mail address is:'.$email.'<br>';
		echo 'Your class time is:'.$time.'<br>';
		echo 'Your class info is:'.$class_info.'<br>';
		echo 'Your gender is:'.$gender.'<br>';
	}

	else {
		echo "Please check the agree checkbox.";
	}
?>