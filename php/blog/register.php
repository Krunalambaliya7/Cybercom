<?php require 'model/registration.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/blog.css">

	<title>Register</title>
</head>
<body>
	<form class="registration" method="POST" onsubmit="registration()">
		<h1>REGISTER</h1><br>
		Prifix:<select name="prifix">
			<option value="" selected="" disabled=""></option>
			<option value="Mr.">Mr.</option>
			<option value="Ms.">Ms.</option>
			<option value="Mrs.">Mrs.</option>
		</select><br><br>
		Firstname:<input type="text" name="firstname" id="firstname" required=""><br><br>
		Lastname:<input type="text" name="lastname" id="lastname"  required=""><br><br>
		E-mail:<input type="email" name="email" id="email"  required=""><br><br>
		Mobile no:<input type="number" name="phonenumber"  id="phonenumber" required=""><br><br>
		Password:<input type="password" name="password" required=""><br><br>
		Confirm Password:<input type="password" name="confirmpassword" id="confirmpassword" required="" ><br><br>
		Information:<textarea cols="30" rows="4" name="information" id="information" required=""></textarea><br><br>
		<input type="checkbox" name="terms" id="terms" required="">Hereby, I Accept Terms & conditions<br><br>
		<span id="error"></span><br><br>
		<button type="submit" name="submit" value="submit" class="btn btn-primary" >Submit</button>
	</form>
	<script type="text/javascript" src="js/blog.js"></script>
</body>
</html>