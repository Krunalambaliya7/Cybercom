<?php 
	require 'header.php';
	require 'model/getblogpost.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog post</title>
	
</head>
</script>
<body>
	<div class="container-fluid m-0 p-0 pl-4 pr-4 col-md-12">
		<div class="container-fluid m-0 p-0 pt-3 pb-3 border-bottom row">
			<h2>Blog post</h2>
		</div>
		<div class="container-fluid m-0 p-0 pt-3 pb-3 row">
			<form method='post' action="post.php"><button type="submit" class="btn bg-success text-white" name="addPost">Add blog post</button></form>
		</div>
		<div class="container-fluid m-0 p-0 pt-3 pb-3 row table-responsive">
			
			<table class="table display m-0 p-0">
				<thead>
					<tr>
						<th>Id</th>
						<th>Category Name</th>
						<th>Title</th>
						<th>Published date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php echo $res; ?>
				</tbody>
			</table>
		</div>
	</div>
	
</body>
</html>