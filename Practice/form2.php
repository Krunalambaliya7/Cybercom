<?php

$name = $_POST['name'];
$Address = $_POST['txt'];
$gender = $_POST['gender'];
$month = $_POST['Month'];
$year = $_POST['Year'];
$date = $_POST['Day'];
$marital = $_POST['marital'];

echo "Name: ".$name."<br>";
echo "Gender: ".$gender."<br>";
echo "Address: ".$Address."<br>";
echo "D.O.B: ".$date." ".$month." ".$year."<br>";
echo "Game: ";
foreach ($_POST['game'] as $key) {
	echo $key." , ";
}
echo "<br>";
echo "MArital status: ".$marital."<br>";

?>