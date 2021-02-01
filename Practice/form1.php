<?php

$name = $_POST['name'];
$Address = $_POST['txt'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$file = $_POST['file'];

echo "Name: ".$name."<br>";
echo "Address: ".$Address."<br>";
echo "Gender: ".$gender."<br>";
echo "Age: ".$age."<br>";
echo "Game: ";
foreach ($_POST['game'] as $key) {
	echo $key." , ";
}
echo "<br>";
echo "File: ".$file."<br>";




?>