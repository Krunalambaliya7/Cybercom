<?php
include 'connection.php';
if (isset($_POST['submit'])) {
	if (empty($_POST['name']) || empty($_POST['txt']) || empty($_POST['gender'] || !empty($_POST['Month'])) || empty($_POST['Year']) || empty($_POST['Day']) || empty($_POST['marital']) || empty($_POST['password'])) {
			echo "Please fill all fields.";
		}
		else{
			$name = $_POST['name'];
			$Address = $_POST['txt'];
			$gender = $_POST['gender'];
			$month = $_POST['Month'];
			$year = $_POST['Year'];
			$date = $_POST['Day'];
			$marital = $_POST['marital'];
			$password = $_POST['password'];
			$dob = $date."-".$month."-".$year;
			$str = "";

			echo "Name: ".$name."<br>";
			echo "Gender: ".$gender."<br>";
			echo "Address: ".$Address."<br>";
			echo "D.O.B: ".$dob."<br>";
			echo "Game: ";
			foreach ($_POST['game'] as $key) {
				echo $key." , ";
				$str.=$key.",";

			}
			echo "<br>";
			echo "Marital status: ".$marital."<br>";

			$insert = "INSERT INTO `form2`(`name`, `password`, `gender`, `address`, `date of birth`, `games`, `marital status`) VALUES ('$name','$password','$gender','Address','$dob','$str','$marital')";
			if (mysqli_query($con,$insert)) {
				echo "Data inserted successfully.";
			}
			else{
				echo "Data is not inserted.";
		}
} 
}
?>


<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
		table{
			background-color: lightgreen;
			border: 1px solid black;
			padding: 20px;
			width: 600px;
			height: 500px;
		}
		label{
			font-weight: bold;
		}
		span{
			color: red;
			font-weight: bold;
		}
	</style>

	<script type="text/javascript" src="form2.js"></script>


	<title>User Form</title>
</head>
<body onload="numb()">
	<center>
		<form onsubmit="return val()"  method="post" >
			<table>
				<tr>
					<td colspan="2">
						<center><h1>USER FORM</h1></center>
					</td>
				</tr>
				<tr>
					<td><label>FIRST NAME</label></td>
					<td>
						<input type="text" name="name" id="name">
						<span id="firstname"></span>
					</td>
				</tr>
				<tr>
					<td><label>PASSWORD</label></td>
					<td><input type="password" name="password" id="password">
						<span id="pass"></span></td>
				</tr>
				<tr>
					<td><label>GENDER</label></td>
					<td>
					<input type="radio" name="gender" id="gender" value="Male">Male&nbsp;&nbsp;
					<input type="radio" name="gender"  value="Female">Female
					<span id="s_gender"></span>
				</td>
				</tr>
				<tr>
					<td><label>ADDRESS</label></td>
					<td><textarea rows="4" cols="30" id="text" name="txt"></textarea><br>
						<span id="address"></span></td>
				</tr>
				<tr>
					<td><label>D.O.B</label></td>
					<td>
						<select name="Month" id="dob_month" >
						<option value="" selected="" disabled="">Month</option>
						<option value="January">January</option>
						<option value="February">February</option>
						<option value="March">March</option>
						<option value="April">April</option>
						<option value="May">May</option>
						<option value="June">June</option>
						<option value="July">July</option>
						<option value="August">August</option>
						<option value="September">September</option>
						<option value="October">October</option>
						<option value="November">November</option>
						<option value="December">December</option>
					</select>&nbsp;&nbsp;

					<select name="Day" id="op1" >
						<option value="" selected="" disabled="">Date</option>
					</select>&nbsp;&nbsp;

					<select name="Year" id="op2">
						<option value="" selected="" disabled="">Year</option>
					</select>
					<span id="date"></span>
				</td>
				</tr>
				<tr>
					<td><label>SELECT GAME</label></td>
					<td>
				<input type="checkbox" name="game[]" value="Hockey">Hockey<br>
				<input type="checkbox" name="game[]" value="Football">Football<br>
				<input type="checkbox" name="game[]" value="Badminton">Badminton<br>
				<input type="checkbox" name="game[]" value="Cricket">Cricket<br>
				<input type="checkbox" name="game[]" value="Vollyball">Vollyball
				<span id="s_game"></span>
			</td>
				</tr>
				<tr>
					<td><label>MARITAL STATUS</label></td>
					<td>
					<input type="radio" name="marital"  value="Married">Married&nbsp;&nbsp;
					<input type="radio" name="marital" value="Unmarried">Unmarried
					<span id="status"></span>
				</td>
				</tr>

				<tr>
					<td colspan="2">
						<center><input type="submit" name="submit">&nbsp;&nbsp;
						<input type="reset" name="Reset"></center>
					</td>
				</tr>
				<tr>
					<td colspan="2">
					<center><input type="checkbox" name="accept" id="accept">I accept this agrement</center><br>
					<span id="box"></span>
					</td>
				</tr>
	</table>
			</table>
		</form>
	</center>
</body>
</html>