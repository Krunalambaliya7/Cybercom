<?php
	
	require 'connection.php';
	if (isset($_POST['submit'])) {
		$title = $_POST['title'];
		$content = $_POST['content'];
		$url = $_POST['url'];
		//$category[] = $_POST['category'];
		$publish = $_POST['publish'];
		$image = $_POST['image'];

		$obj = new DataBaseOperation();
		$query = "INSERT INTO `post`(`id`, `User id`, `title`, `url`, `content`, `image`, `published at`, `created at`, `uploaded at`) VALUES (NULL,'','$title','$url','$content','$image','$publish','','')";
		$id = $obj->insertData($query);

		foreach ($_POST['category'] as $key ) {
			$query = "INSERT INTO `relation`(`post id`, `category id`) VALUES ('$id','$key')";
			$obj->insertData($query);
		}
		header("Location:./post.php");
	}

?>