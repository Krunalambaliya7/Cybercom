<?php
include 'connection.php';
	if (isset($_POST['submit'])) {
		if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subjetc'] || !empty($_POST['message'])) ) {
			echo "Please fill all fields.";
		}
		else{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		echo "Name: ".$name."<br><br>";
		echo "E-mail: ".$email."<br><br>";
		echo "Subject: ".$subject."<br><br>";
		echo "Message: ".$message."<br><br>"; 

		$insert = "INSERT INTO `form3`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
		if (mysqli_query($con,$insert)) {
				echo "Data inserted successfully.";
			}
			else{
				echo $con->error;
			}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.border{
			border: 5px solid black;
			margin-left: 500px;
			margin-right: 500px;
			padding: 20px;
			background-color: gray;
		}
		input{
			width: 250px;
			height: 50px;
			margin-bottom: 30px;
		}
		textarea{
			width: 250px;
			height: 100px;
			
		}
		.orange{
			background-color: orange;
			padding-bottom: 10px;
			padding-top: 10px;
		}
		.yellow{
			background-color: yellow;
			padding-bottom: 10px;
			padding-top: 10px;
		}
		.lightyellow{
			background-color: lightyellow;
			padding-top: 20px;
		}
		span{
			color: red;
			font-weight: bold;
		}
		.btn{
			border: none;
			font-size: 25px;
			font-weight: bold;
			background-color: yellow;
			color: brown;
		}
	</style>
	<script type="text/javascript" src="form.js"></script>
	<title>Contact us</title>
</head>
<body>
	<center>
		<div class="border">
		<form method="post" action="form.php" onsubmit="return val()">
			<div class="orange">
				<h1>CONTACT US!</h1>
			</div>
			<div class="lightyellow">
				<input type="text" name="name" id="name" placeholder="Name..."><br>
				<span id="s_name"></span><br>
				<input type="email" name="email" id="email" placeholder="E-mail..."><br>
				<span id="mail"></span><br>
				<input type="text" name="subject" id="subject" placeholder="Subject..."><br>
				<span id="sub"></span><br>
				<textarea rows="4" cols="20" name="message" id="message" placeholder="Message..."></textarea><br>
				<span id="msg"></span>
			</div>
			<div class="yellow">
				<input type="submit" name="submit" value="Submit" class="btn">
			</div>
		</form>
		</div>
	</center>
</body>
</html>

