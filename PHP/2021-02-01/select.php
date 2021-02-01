<?php
include 'connection.php';

$select = "SELECT * FROM user_info";
$result = mysqli_query($con,$select);

echo "<b>Id   Name   E-mail   Birth Date</b><br>";

while ($arr = mysqli_fetch_assoc($result)) {
	echo $arr['id']."   ".$arr['name']."   ".$arr['e-mail']."   ".$arr['birth date']."<br>";
}


?>