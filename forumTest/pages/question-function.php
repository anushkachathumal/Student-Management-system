<?php
include "../functions/db.php";
 					date_default_timezone_set("Asia/Colombo");
                        $datetime=date("Y-m-d h:i:sa");
                      
extract($_POST);

	
	
	
$sql = "INSERT INTO tblpost(title,content,datetime,cat_id,student_id ) VALUES ('$title','$content','$datetime','$category','$stid')";
$res = mysqli_query($con,$sql);

if($res){
                                   echo '<script type="text/javascript">';
                                    echo 'alert("Post Successfully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=home.php" />';
   }else{
	   
	     echo '<script type="text/javascript">';
                                    echo 'alert("Post Faild")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=home.php" />';
   }
   
   if(isset($_POST["comsave"])){
	  $sql1 = "INSERT INTO tblcomment(comment,post_id,datetime,student_id) VALUES ('$comment','$post_id','$datetime','$stid')";
$res = mysqli_query($con,$sql1);

if($res){
                                   echo '<script type="text/javascript">';
                                    echo 'alert("Post Successfully")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=home.php" />';
   }else{
	   
	     echo '<script type="text/javascript">';
                                    echo 'alert("Post Faild")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=home.php" />';
   } 
   }
   
?>