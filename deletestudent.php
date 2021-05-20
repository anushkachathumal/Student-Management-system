<?php

$id=$_GET["id"];
	
		
$con=mysqli_connect("localhost","root","","wisdom");

$res = mysqli_query($con,"delete from login where student_id='$id'");
	
if($res){
	
	$res1 = mysqli_query($con,"delete from student where student_id='$id'");

	header('location:studentDetails.php');
	
}else{
	
	echo "failed";
}

	


?>