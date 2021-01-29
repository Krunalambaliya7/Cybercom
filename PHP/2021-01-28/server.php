<?php 

	//Server variable
	echo $_SERVER['SCRIPT_NAME'].'<br>'; //_SERVER is the predefine environmental variable 
	//scrip_name is use in the dynamic web.

	echo $_SERVER['HTTP_HOST'].'<br>'; //return the host name.

	echo $_SERVER['REMOTE_ADDR'].'<br>'; //retuen remote address.

	echo $_SERVER['HTTP_CLIENT_IP'].'<br>';

	echo $_SERVER['HTTP_X_FORWADED_FOR'].'<br>';
?>