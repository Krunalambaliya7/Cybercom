<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$month = $_POST['Month'];
	$day = $_POST['Day'];
	$year = $_POST['Year'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$security_que = $_POST['ques'];
	$ans = $_POST['ans'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$phone = $_POST['phone'];
	$type_phone = $_POST['type_phone'];

	echo "User's information:<br><br>";
	//echo $firstname ." ". $lastname ." ". $month ." ". $day ." ". $year ." ". $gender ." ". $email ." ". $security_que ." ". $ans ." ". $address ." ". $city ." ". $state ." ". $zip ." ". $phone ." ". $type_phone;

echo"
	<!DOCTYPE html>
		<html>
		<head>
			<title>Information</title>
		</head>
		<body>
			<table>
				<tr>
					<th>First Name:</th>
					<td>$firstname</td>
				</tr>
				<tr>
					<th>Last Name:</th>
					<td>$lastname</td>
				</tr>
				<tr>
					<th>Date of Birth:</th>
					<td>$day th $month $year</td>
				</tr>
				<tr>
					<th>Gender:</th>
					<td>$gender</td>
				</tr>
				<tr>
					<th>Email:</th>
					<td>$email</td>
				</tr>
				<tr>
					<th>Security Question:</th>
					<td>$security_que</td>
				</tr>
				<tr>
					<th>Security Answer:</th>
					<td>$ans</td>
				</tr>
				<tr>
					<th>Address:</th>
					<td>$address</td>
				</tr>
				<tr>
					<th>City:</th>
					<td>$city</td>
				</tr>
				<tr>
					<th>State:</th>
					<td>$state</td>
				</tr>
				<tr>
					<th>Zip code:</th>
					<td>$zip</td>
				</tr>
				<tr>
					<th>$type_phone no.</th>
					<td>$phone</td>
				</tr>

			</table>
		</body>
		</html>"
				
?>