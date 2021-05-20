<?php


function dbcon(){
	$host = "localhost";
	$user = "root";
	$pwd = "";
	$db = "wisdom";

	$con = mysqli_connect($host,$user,$pwd);

	$sel = mysqli_select_db($db);
}

function dbclose(){
	$host = "localhost";
	$user = "root";
	$pwd = "";
	$db = "wisdom";

	$con = mysqli_connect($host,$user,$pwd) or die ("ERROR Connecting to Database");

	$sel = mysqli_select_db($db);

	mysql_close($con);
}

function deleteuser($student_id){
	dbcon();
	$sel = mysqli_query($con,"DELETE from student where student_ID='$student_id' ");

	if($sel==true){
		$del = mysqli_query($con,"DELETE from login where student_id='$student_id' ");
			echo "success";
		
	}
	else{
		echo "failed";
	}

	dbclose();
}

function category(){
	dbcon();
	$sel = mysqli_query($con,"SELECT * from category");

	if($sel==true){
		while($row=mysqli_fetch_assoc($sel)){
			extract($row);
			echo '<option value='.$cat_id.'>'.$category.'</option>';
		}
	}


	dbclose();
}

?>