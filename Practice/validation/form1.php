<?php
	include 'connection.php';
	if (isset($_POST['Submit'])) {
		if (empty($_POST['name']) || empty($_POST['txt']) || empty($_POST['gender'] || !empty($_POST['age'])) || empty($_POST['file'])) {
			echo "Please fill all fields.";
		}
		else{
			$name = $_POST['name'];
			$password = $_POST['password'];
			$Address = $_POST['txt'];
			$gender = $_POST['gender'];
			$age = $_POST['age'];
			$file = $_POST['file'];
			$str = "";

			echo "Name: ".$name."<br>";
			echo "Address: ".$Address."<br>";
			echo "Gender: ".$gender."<br>";
			echo "Age: ".$age."<br>";
			echo "Game: ";
			foreach ($_POST['game'] as $key) {
				echo $key." , ";
				$str.=$key.",";
			}
			echo "<br>";
			echo "File: ".$file."<br>";

			$insert = "INSERT INTO `form1`(`name`, `password`, `address`, `game`, `gender`, `age`, `file`) VALUES ('$name','$password','$Address','$str','$gender','$age','$file')";

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
		table{
			border: 1px solid black;
			height: 700px;
			width: 900px;		
		}
		
		th,tr,td{
			text-align: center;
			border: 1px solid black;
		}
		th{
			background-color: yellow;
			color: red;
		}
		td{
			background-color: lightblue;
		}
		input,textarea{
			background-color: lightgreen;
		}
		label{
			font-weight: bold;
			font-size: 20px;
		}
		span{
			color: red;
			font-weight: bold;
		}

	</style>
	<script type="text/javascript" src="form1.js"></script>
	<title>User form</title>
</head>
<body>
	<center>
	 <form name="form1" action="form1.php" method="POST" onsubmit="return validation()"> 
	<table>
		<tr>
			<th colspan="2"><h1>User Form</h1></th>
		</tr>
		<tr>
			<td><label>Enter Name</label></td>
			<td><input type="text" name="name" id="name"><br>
			<span id="s_name"></span></td>
		</tr>
		<tr>
			<td><label>Enter Password</label></td>
			<td><input type="password" name="password" id="password"><br>
			<span id="s_password"></span>
			</td>
			
		</tr>
		<tr>
			<td><label>Enter Address</label></td>
			<td><textarea rows="4" cols="30" id="text" name="txt"></textarea><br>
			<span id="s_address"></span></td>
		</tr>
		<tr>
			<td><label>Select Game</label></td>
			<td>
				<input type="checkbox" name="game[]" value="Hockey">Hockey<br>
				<input type="checkbox" name="game[]" value="Football">Football<br>
				<input type="checkbox" name="game[]" value="Badminton">Badminton<br>
				<input type="checkbox" name="game[]" value="Cricket">Cricket<br>
				<input type="checkbox" name="game[]" value="Vollyball">Vollyball<br>
				<span id="s_game"></span>
			</td>
		</tr>
		<tr>
			<td><label>Gender</label></td>
			<td>
				<input type="radio" name="gender" value="Male">Male&nbsp;&nbsp;
				<input type="radio" name="gender" value="Female">Female
			<br>
			<span id="s_gender"></span></td>
		</tr>
		<tr>
			<td><label>Select your age</label></td>
			<td>
				<select name="age" id="age">
					<option value="" disabled="" selected="">select</option>
					<option value="Kid">Kid</option>
					<option value="Teenager">Teenager</option>
					<option value="Adult">Adult</option>
				</select>
			<br>
			<span id="s_age"></span></td>
		</tr>
		<tr>
			<td colspan="2"><input type="file" name="file" id="file"><br>
			<span id="s_file"></span></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="reset" name="Reset">&nbsp;&nbsp;&nbsp;
				<input type="submit" name="Submit">
			</td>
		</tr>

</form>
</center>

</body>
</html>