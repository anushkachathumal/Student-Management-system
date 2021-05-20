<?php
session_start();
	$uname=$_POST["username"];
	$pswrd=md5($_POST["password"]);
	//$pswrd=$_POST["password"];

	 
	 $con=mysqli_connect("localhost","root","","wisdom");
	 $res=mysqli_query($con,"select* from login where username='$uname' and password='$pswrd'");
	 
	 $b=false;
	 
	 while($row=mysqli_fetch_array($res)){
		 $b=true;
		 $array[]=$row;
		  $uname=$row["username"];
		  $ustype=$row["usertype"];
		  $stuID =$row["student_id"];
		  $_SESSION["user"]=$uname;
		  //$_SESSION["student_id"]=$stuID;
	 }
		 if ($b) {
                if ($ustype=='student') {
                      header("location:profile/profileTest.php");  
                  }
                 if($ustype=='admin') {
                      header("location:admin_index.php");     
                  }
            }
			else{
                     echo "<script>alert('Your Username or Password is Not valied !!... ');window.location='logup.php'</script>";
                  }
	 
	 
	 
?>