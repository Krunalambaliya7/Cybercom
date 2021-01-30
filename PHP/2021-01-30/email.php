<?php 

$to = 'meetpatel5393@gmail.com';
$subject = 'demo mail';
$body = 'This email is for practice purpose of send email using php.';
$headers = 'from: ambaliya.krunal77@gmail.com';
//$headers = 'from: Krunal Ambaliya <ambaliya.krunal77@gmail.com>';

if(mail($to, $subject, $body, $headers))
{
	echo 'Email has send.';
}
else{
	echo 'Email has not send.';
}

?>