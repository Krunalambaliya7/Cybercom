<?php
include 'connection.php';
if (isset($_POST['submit'])) {
	if (empty($_POST['firstname']) 
		||empty($_POST['lastname']) 
		||empty($_POST['email'])
		||empty($_POST['Day']) 
		||empty($_POST['Month'])
		||empty($_POST['Year']) 
		||empty($_POST['gender']) 
		||empty($_POST['phone'])
		||empty($_POST['country']) 
		||empty($_POST['password']) 
		||empty($_POST['confirm_password'])) 
	{
		echo "Fill all fields";
	}
	else{
		
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$day = $_POST['Day'];
		$month = $_POST['Month'];
		$year = $_POST['Year'];
		$gender = $_POST['gender'];
		$phonenumber = $_POST['phone'];
		$country = $_POST['country'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		$dob = date($year."-".$month."-".$day);

		if ($password == $confirm_password) {
			echo "First Name: ".$firstname."<br><br>";
			echo "Last Name: ".$lastname."<br><br>";
			echo "Date of birth: ".$day." ".$month." ".$year."<br><br>";
			echo "E-mail: ".$email."<br><br>";
			echo "Gender: ".$gender."<br><br>";
			echo "Country: ".$country."<br><br>";
			echo "Phone number: ".$phonenumber."<br><br>";

			$insert = "INSERT INTO `form4`(`first name`, `last name`, `birth date`, `gender`, `country`, `e-mail`, `phone`, `password`) VALUES ('$firstname','$lastname','$dob','gender','$country','$email','$phonenumber','$password')";

			if (mysqli_query($con,$insert)) {
				echo "Data inserted successfully.";
			}
			else{
				echo $con->error;
			}
		}
		else{
			echo "Password and confirm password is not same.";
		}	


		}
}


?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		table{
			width: 500px;
			height: 700px;
			border-collapse: collapse;
		}
		label{
			color: yellow;
			font-weight: bold;
		}
		.orange{
			background-color: orange;
		}
		.blue{
			background-color: darkblue;
		}
		.green{
			background-color: lightgreen;
			padding: 5px;
			font-weight: bold;
			font-size: 12px;
		}
		.red{
			background-color: red;
			font-size: 12px;
			padding: 5px;
			font-weight: bold;
		}
		span{
			color: white;
			font-weight: bold;
		}
	</style>
	<script type="text/javascript" src="form4.js"></script>
	<title>Sign up</title>
</head>
<body onload="numb()">
	<center>
		<form method="post" action="form4.php" >
			<table>
				<tr class="orange">
					<th colspan="2"><label><h2>Sign up</h2></label></th>
				</tr>
				<tr class="blue">
					<td><label>First Name:</label></td>
					<td><input type="text" name="firstname" id="firstname" placeholder="Enter first name"><br>
						<span id="fname"></span></td>
				</tr>
				<tr class="blue">
					<td><label>Last Name:</label></td>
					<td><input type="text" name="lastname" id="lastname" placeholder="Enter last name"><br>
						<span id="lname"></span></td>
				</tr>
				<tr class="blue">
					<td><label>Date of birth:</label></td>
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

					<select name="Day" id="op1">
						<option value="" selected="" disabled="">Date</option>
					</select>&nbsp;&nbsp;

					<select name="Year" id="op2">
						<option value="" selected="" disabled="">Year</option>
					</select><br>
					<span id="date"></span>

					</td>
				</tr>
				<tr class="blue">
					<td><label>Gender:</label></td>
					<td>
						<input type="radio" name="gender" id="gender" value="Male"><label>Male</label>&nbsp;&nbsp;
						<input type="radio" name="gender"  value="Female"><label>Female</label><br>
						<span id="gen"></span>
					</td>
				</tr>
				<tr class="blue">
					<td><label>Country:</label></td>
					<td>
						<select name="country" id="country">
							<option value="" selected="">Country</option>
							<option value="India">India</option>
							<option value="America">America</option>
							<option value="Russia">Russia</option>
						</select><br>
						<span id="coun"></span>
					</td>
				</tr>
				<tr class="blue">
					<td><label>E-mail:</label></td>
					<td><input type="email" name="email" id="email" placeholder="Enter E-mail"><br>
						<span id="mail"></span></td>
				</tr>
				<tr class="blue">
					<td><label>Phone number:</label></td>
					<td><input type="number" name="phone" id="phone" placeholder="Enter phone number"><br>
						<span id="number"></span></td>
				</tr>
				<tr class="blue">
					<td><label>Password:</label></td>
					<td><input type="Password" name="password" id="password"><br>
						<span id="pass"></span></td>
				</tr>
				<tr class="blue">
					<td><label>Confirm Password:</label></td>
					<td><input type="Password" name="confirm_password" id="confirm_password"><br>
						<span id="cpass"></span></td>
				</tr>
				<tr class="blue">
					<td colspan="2">
						<input type="checkbox" name="agree" id="agree"><label>I Agree Terms of use</label><br>
						<span id="box"></span>
					</td>
				</tr>
				<tr class="orange">
						<td colspan="2">
						<center>
						<input type="submit" class="green" name="submit" value="submit">&nbsp;&nbsp;&nbsp;
						<input type="reset" class="red" name="Reset">
					</center>
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>