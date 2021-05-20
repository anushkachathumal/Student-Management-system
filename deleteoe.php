<?php

$id=$_GET["id"];
	
		
$con=mysqli_connect("localhost","root","","wisdom");

$res = mysqli_query($con,"delete from online_eenroll where id_num='$id'");
	
if($res){
	
	header('location:adminpannel.php');
	
	
}else{
	
	echo "failed";
}

	


?>