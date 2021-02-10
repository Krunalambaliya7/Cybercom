<?php require 'model/setcategory.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/blog.css">
	<title>Category</title>
</head>
<body>
	<form class="category" method="POST">
		<h1>Add new category</h1>
		Title:<input type="text" name="title" id="title" required=""><br><br>
		Content:<textarea cols="30" rows="4" name="content" id="content" required=""></textarea><br><br>
		URL:<input type="text" name="url" id="url" required=""><br><br>	
		Meta title:<input type="text" name="metatitle" id="metatitle" required=""><br><br>
		Parent Category:<select name="paraentcategory" id="paraentcategory" required="">
			<option value="" selected="" disabled=""></option>
			<option value="Lifestyle">Lifestyle</option>
			<option value="Health">Health</option>
			<option value="Education">Education</option>
			<option value="Music">Music</option>
		</select><br><br>
		Image:<input type="file" name="image" id="image" accept=".jpg.png.jpeg"><br><br>
		<button name="submit" value="submit" class="btn btn-primary">Submit</button>
	</form>
</body>
</html>