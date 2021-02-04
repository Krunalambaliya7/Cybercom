<?php

//simpal error handling
/*	function div ($a,$b)
	{
		if ($b == 0) {
			throw new Exception("This division is not possible.");
		}
		else
		{
			return $a/$b;
		}
	}
	
echo div(10,0);*/

//using try catch block
/*$age = 10;
try {
	if ($age > 18) {
		echo "Mature";
	}
	else{
		throw new Exception("Not mature");
		
	}
	
} catch (Exception $err) {
	echo "Error".$err.getMessage();
}*/

//Using multiple catch
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'practice';

class ServerException extends Exception{}
class DatabaseException extends Exception{}

try {
	if (!@mysqli_connect($host,$user,$pass,$db)) {
		throw new ServerException("Error.");
	}
	else if(!@mysqli_select_db($db))
	{
		throw new DatabaseException("Error.");
	}
	else
	{
		echo 'connected';
	}
} catch (ServerException $server) {
	echo "Server ".$server->getMessage();
}
catch (DatabaseException $data){
	echo "Database ".$data->getMessage();
}
?>