<?php 
session_start();


if (isset( $_SESSION['firstname']) && isset($_SESSION['lastname'])) {
	echo $_SESSION['firstname']." ".$_SESSION['lastname'];
}
else{
	echo "Set the session value.";
}

?>