<?php

	include("dbconnect.php");
	
	
	
	class editslideaction extends dbconnect{
		
		function showslideSave($table,$field){
			$result=mysqli_query($this->dbc(),"insert into $table values('".implode("','",array_values($field))."')");
			
			if($result){
				header("Location:slideshow_edit.php");
			}
			else {
				echo "<script>alert('Try again... ');window.location='slideshow_edit.php'</script>";
				}
		}
		function view($table){
			$result=mysqli_query($this->dbc(),"select * from $table");
			$array=array();
			
			while($row=mysqli_fetch_assoc($result)){
				$array[]=$row;
			}
			return $array;
		}
		
		function deleteimage($table,$field){
			$result=mysqli_query($this->dbc(),"delete from $table where id='".$field."'");
			if($result){
				header("Location:slideshow_edit.php");
			}
			else {
				echo "<script>alert('Try again... ');window.location='slideshow_edit.php'</script>";
				}
	}
	
		
		function addsave($table,$field){
			$result=mysqli_query($this->dbc(),"insert into $table values('".implode("','",array_values($field))."')");
			
			if($result){
				header("Location:displayadd.php");
			}
			else {
				echo "<script>alert('Try again... ');window.location='displayadd.php'</script>";
				}
		}
		
		function addview($table){
			$result=mysqli_query($this->dbc(),"select * from $table");
			$array=array();
			
			while($row=mysqli_fetch_assoc($result)){
				$array[]=$row;
			}
			return $array;
		}
		
		function deleteadd($table,$field){
			$result=mysqli_query($this->dbc(),"delete from $table where add_id='".$field."'");
			if($result){
				header("Location:displayadd.php");
			}
			else {
				echo "<script>alert('Try again... ');window.location='displayadd.php'</script>";
				}
	}
	
		function forumSave($table,$field){
			$result=mysqli_query($this->dbc(),"insert into $table values('".implode("','",array_values($field))."')");
			
			if($result){
				header("Location:.php");
			}
			else {
				echo "<script>alert('Try again... ');window.location='home.php'</script>";
				}
		}
		
		function forumview($table){
			$view=mysqli_query($this->dbc(),"select * from $table");
			$array=array();
			
			while($row=mysqli_fetch_assoc($view)){
				$array[]=$row;
			}
			return $array;
		}


		function login($u,$p,$t){

          
                $res = mysqli_query($this->db(),"select * from login where username='$u' and password='$p' ");
                $array=array();
                $b=false;
                while($row = mysqli_fetch_assoc($res)){
                    $b=true;
                    $array[]=$row;
                    $usertype=$row["usertype"];
                    $_SESSION["username"]=$u;
        
                }
        
            if ($b) {
                
                  if ($usertype=="admin") {
                      header("location:admin_index.php");
                      echo "sdgjsdfyt";
                  }elseif ($usertype=="student") {
                      header("location:student.php");
                      echo "sysd";
                  }else{
                      header("location:register.php");
                  }
            }else{
                    header("location:login.html");
            }
            
        }
		function deletforum($table,$field){
			$delete=mysqli_query($this->dbc(),"delete from $table where forum_id='".$field."'");
			if($delete){
				header("Location:chatmassage.php");
			}
			else {
				echo "<script>alert('Try again... ');window.location='displayadd.php'</script>";
				}
	}


	function manupay($table,$field){
			$result=mysqli_query($this->dbc(),"insert into $table values('".implode("','",array_values($field))."')");
			
			if($result){
				header("Location:payment.php");
			}
			else {
				echo "<script>alert('Try again... ');window.location='payment.php'</script>";
				}
		}
	}

		$object=new editslideaction;
		
		if(isset($_POST["imgsave"])){
			
			
			$img=$_FILES['img'];
			
			$img=$_FILES['img']["tmp_name"];
			$name=$_FILES['img']["name"];
			$path="uplords/slideimages/".$name;
			
			$upload=move_uploaded_file($img,$path);
			
			$data=array("0","$path");
			
			$object->showslideSave("slideimages",$data);
		}
		
		else if(isset($_POST["addsave"])){
			
			$topic=$_POST['topic'];
			$subtopic=$_POST['subtopic'];
			$desc=$_POST['description'];
			
			$img=$_FILES['img'];
			
			
			$img=$_FILES['img']["tmp_name"];
			$name=$_FILES['img']["name"];
			$path="uplords/add/".$name;
			
			$upload=move_uploaded_file($img,$path);
			
			$data=array("0","$topic","$subtopic","$path","$desc");
			
			$object->addsave("addcreate",$data);
		}
		
		else if(isset($_POST["forumsave"])){
			$st_id=$_POST['sid'];
			$sb_id=$_POST['sbid'];
			$subject=$_POST['s_matter'];
			$message=$_POST['msg'];
			
			$data=array("0","$st_id","$sb_id","$subject","$message");
			
			$object->forumSave("diss_forum",$data);
		}

		else if(isset($_POST["paymanual"])){
			$st_name=$_POST['stname'];
			$st_id=$_POST['stId'];
			$month=$_POST['month'];
			$amount=$_POST['fees'];
			
			$data=array("0","$st_name","$st_id","$month","$amount");
			
			$object->manupay("payments",$data);
		}
		
		
		if(isset($_GET["id"])){
			$id=$_GET["id"];
			$object->deleteimage("slideimages",$id);
		}
		else if(isset($_GET["add_id"])){
			$id=$_GET["add_id"];
			$object->deleteadd("addcreate",$id);
		}
		else if(isset($_GET["forum_id"])){
			$id=$_GET["forum_id"];
			$object->deletforum("diss_forum",$id);
		}
		
		
?>