<?php  

$a=$_GET["id"];

$con =mysqli_connect("localhost","root","","wisdom");
if ($con) {
	
	echo "not";
}else {
	
	echo "not deleted";
}


	
$res=mysqli_query($con,"delete from feedback where name ='$a'");

if ($res) {
	
	 header("location:feedbackDetails.php");
	
}else {
	
	echo "not deleted";
}




?>