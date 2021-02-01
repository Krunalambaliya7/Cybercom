<?php
include 'connection.php';

$id = $_POST['id'];
$delete = "DELETE FROM user_info WHERE id=$id";

if (mysqli_query($con,$delete)) {
	echo "Data deleted.";
}

?>