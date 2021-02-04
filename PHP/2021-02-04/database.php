<?php

class connect
{
	public function __construct($host,$user,$pass,$db)
	{

	}
	public function con($host,$user,$pass,$db)
	{
		if(mysqli_connect($host,$user,$pass,$db))
		{
			echo 'connected!';
		}
		else
		{
			echo 'not connected';
		}
	}
}

$data = new connect('localhost','root','','practice');
$data->con('localhost','root','','practice')

?>