<?php
include 'connection.php';
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	echo "E-mail: ".$email;	

	$insert = "INSERT INTO `form5`(`e-mail`, `password`) VALUES ('$email','$password')";
	if (mysqli_query($con,$insert)) {
		echo "Data insert sucssessfully.";
	}
	
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.border{
			background-color: #C0C0C0;
			padding: 10px;
			margin-right: 500px;
			margin-left: 500px;
		}
		.radius{
			border-radius: 20px;
		}
		.red{
			background-color: #FF6347;
			color: white;
			padding: 10px;
			border-radius: 20px 20px 0px 0px;
		}
		.white{
			padding-top: 15px;
			padding-left: 25px;
			background-color: white;
			border-radius: 0px 0px 20px 20px;
		}
		label{
			font-weight: bold;
			font-size: 20px;
			color: 	#A9A9A9;	
		}
		input{
			width: 400px;
			height: 50px;
			background-color: #DCDCDC;
			border: none;
		}
		span{
			color: red;
			font-weight: bold;
		}
		.button{
			background-color: #00FF7F;
			border: none;
			border-radius: 10px;
			color: white;
			justify-content: center;
			margin-bottom: 50px;
			margin-left: 150px;
			font-size: 20px;
			width: 130px;
			height: 40px;
		}
	</style>
	<script type="text/javascript" src="form5.js"></script>
	<title>Sign in</title>
</head>
<body>
	
		<form method="POST" onsubmit="return validation1()">
			<div class="border">
				<div class="radius">
					<div class="red">
						<div><h1><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Sign in</h1></div>
					</div>
					<div class="white">
						<label>E-mail Address</label><br><br>
						<input type="email" name="email" id="email" placeholder="E-mail"><br><br>
						<span id="mail"></span><br>
						<label>Password</label><br><br>
						<input type="password" name="password" id="password" placeholder="Password"><br><br>
						<span id="pass"></span><br>
						<input type="submit" name="submit" class="button">
					</div>
			</div>
			</div>
		</form>
	
</body>
</html>