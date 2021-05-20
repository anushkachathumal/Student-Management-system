<?php  

$a=$_GET["id"];

$con =mysqli_connect("localhost","root","","wisdom");
if ($con) {
	
	echo "not";
}else {
	
	echo "not deleted";
}


	
$res=mysqli_query($con,"delete from admin where admin_id ='$a'");

if ($res) {
	
	 header("location:success.php");
	
}else {
	
	echo "not deleted";
}




?>