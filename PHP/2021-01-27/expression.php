<?php

	$str = 'Hello world!';
	if(preg_match('/ /', $str))
	{
		echo 'String has a space.';
	}
	else{
		echo 'string has no space.';
	}

 ?>