<?php require 'login.php'; ?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/blog.css">

	<title>Login</title>

</head>
<body>

		<div class="form">
		<h1>LOGIN</h1><br><br><br>
		<form method="post" action="blog_post.php" class="f">
			
			<div>
				<label>E-mail</label><br>
				<span id="emailError" class="span"></span><br>
				<input type="email" name="email" id="email" re>
			</div><br><br>
			<div>
				<label>Password</label><br>
				<span id="passwordError" class="span"></span><br>
				<input type="password" name="password" id="password" required="">
			</div><br><br>
			<div>
				<button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>&nbsp;&nbsp;
				<button class="btn btn-primary"><a href="register.php" class="text-white">Register</a></button>
			</div>

			</div>
	
		</form>
	</div>
	
	<script type="text/javascript" src="js/blog.js"></script>
</body>
</html>