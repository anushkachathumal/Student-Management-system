<?php
$host = "localhost";
$user = "root";
$pwd  = "";
$db   = "dbforum";

$con = mysqli_connect($host,$user,$pwd,$db);



class forumaction{
		
		function forum($table,$field){
			$result=mysqli_query($con,"insert into $table values('".implode("','",array_values($field))."')");
			
			if($result){
				header("Location:content.php");
			}
			else {
				echo "<script>alert('Try again... ');window.location='content.php'</script>";
				}
		}
		}

		$object=new forumaction;
		else(isset($_POST["comsave"])){
			$com=$_POST['comment'];
			$post_id=$_POST['postid'];
			$user_id=$_POST['userid'];
			date_default_timezone_set("Asia/Colombo");
                        $datetime=date("Y-m-d h:i:sa");
			
			$data=array("0","$com",,"$post_id","$datetime","$userid");
			
			$object->forumSave("tblcomment",$data);
		}
		
?>