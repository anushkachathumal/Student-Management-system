<?php  

$a=$_GET["id"];

$con =mysqli_connect("localhost","root","","wisdom");
if ($con) {
	
	echo "not";
}else {
	
	echo "not deleted";
}


	
$res=mysqli_query($con,"delete from teacher where teacher_id ='$a'");

if ($res) {
	
	 header("location:teacherDetails.php");
	
}else {
	
	echo "not deleted";
}




?>