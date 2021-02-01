<?php 
	include 'connection.php';
	$select = $_POST['select'];

	switch ($select) {
		case 'insert':
		echo	'<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<style>
		.form{
			margin-right: 500px;
			margin-left: 500px;	
		}
		label{
			font-size: 20px;
		}
	</style>


	<title>Insert data</title>
</head>
<body class="mt-5">

	<form action="insert.php" method="post" class="form">
	<div class="conainer">		
		<div class="row pb-3">
		<div class="col-3">
			<label>Name:</label>
		</div>
		<div class="col-8">
			<input type="text" name="name" required="">
			</div>
		</div>

		<div class="row pb-3">
		<div class="col-3">
			<label>E-mail:</label>
		</div>
		<div class="col-8">
			<input type="email" name="email" required="">
			</div>
		</div>

		
		<div class="row pb-3">
			<div class="col-3">
				<label>Password:</label>
			</div>
			<div class="col-8">
				<input type="password" name="password" required="">
			</div>
		</div>

		<div class="row pb-3">
			<div class="col-3">
				<label>Birth date:</label>
			</div>
			<div class="col-8">
				<input type="date" name="date" required="">
			</div>
		</div>

		<div class="row">
			<div class="col-8">
				<center><input type="submit" name="submit"></center>
			</div>
		</div>

		
	</div>	
	</form>

</body>
</html>';
		break;
		



		case 'delete':
			echo '<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<style>
		.form{
			margin-right: 500px;
			margin-left: 500px;	
		}
		label{
			font-size: 20px;
		}
	</style>


	<title>Delete data</title>
</head>
<body class="mt-5">

	<form action="delete.php" method="post" class="form">
	<div class="conainer">		
		<div class="row pb-3">
		<div class="col-2">
			<label>ID:</label>
		</div>
		<div class="col-6">
			<input type="text" name="id" required="">
			</div>
		</div>
		<div class="row">
			<div class="col-8">
				<center><input type="submit" name="submit"></center>
			</div>
		</div>

		
	</div>	
	</form>

</body>
</html>';
			break;

			case 'view':


$query = "SELECT * FROM user_info";
$result = mysqli_query($con,$query);

echo "<b>Id   Name   E-mail   Birth Date</b><br>";

while ($arr = mysqli_fetch_assoc($result)) {
	echo $arr['id']."   ".$arr['name']."   ".$arr['e-mail']."   ".$arr['birth date']."<br>";
}

				break;


		default:
			# code...
			break;
	}
?>