<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$day = $_POST['Day'];
$month = $_POST['Month'];
$year = $_POST['Year'];
$gender = $_POST['gender'];
$phonenumber = $_POST['phone'];
$country = $_POST['country'];

echo "First Name: ".$firstname."<br><br>";
echo "Last Name: ".$lastname."<br><br>";
echo "Date of birth: ".$day." ".$month." ".$year."<br><br>";
echo "E-mail: ".$email."<br><br>";
echo "Gender: ".$gender."<br><br>";
echo "Country: ".$country."<br><br>";
echo "Phone number: ".$phonenumber."<br><br>";

?>