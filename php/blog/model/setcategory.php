<?php
	require 'connection.php';
	if (isset($_POST['submit'])) {
		$title = $_POST['title'];
		$content = $_POST['content'];
		$url = $_POST['url'];
		$metatitle = $_POST['metatitle'];
		$category = $_POST['paraentcategory'];
		$image = $_POST['image'];

		$obj = new DataBaseOperation();
		$query = "INSERT INTO `category`(`id`, `parent category id`, `title`, `meta title`, `url`, `contant`, `created at`, `uploaded at`) VALUES (NULL,'','$title','$metatitle','$url','$content','','')";

		$obj->insertData($query);
		header('Location: getblogpost.php');
	}

?>