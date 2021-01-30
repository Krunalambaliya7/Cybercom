<?php 
	
	$name = $_POST['name'];
	$email = $_POST['email'];
 	$text = $_POST['text'];

 	$mail_text = $text.'Thnak you for Registration.';

 	if (strlen($name) > 25 || strlen($email) > 50 || strlen($text) > 1000) {
 		echo "Enter valid length of characters.";
 	}
 	else{

 		$subject = 'Registration e-mail.';
 		$headers = 'From: Krunal Ambaliya <ambaliya.krunal77@gmail.com>';

 		if(mail($email, $subject, $mail_text, $headers))
		{
			echo 'Email has send.';
		}
		else{
			echo 'Email has not send.';
		}
 	}
?>