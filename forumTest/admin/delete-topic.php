<?php
include "../functions/db.php";
  if(isset($_GET['post_id'])){
		$id = $_GET['post_id'];
	}
	if(empty($id)){
		header("location:index.php");
	}

	$run = mysqli_query($con,"DELETE FROM tblpost WHERE post_id = '$id'")
	or die(mysqli_error());  	

	header("Location:post.php");
	
?>