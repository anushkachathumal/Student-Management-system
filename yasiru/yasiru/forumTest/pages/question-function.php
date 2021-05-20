<?php
 
include "../functions/db.php";
 					date_default_timezone_set("Asia/Colombo");
                        $datetime=date("Y-m-d h:i:sa");
                      
$tit=$_POST['title'];
$cont=$_POST['content'];
$categ=$_POST['category'];
$st_id=$_POST['stid'];	
	
	
$sql = "INSERT INTO tblpost(title,content,cat_id,student_id) VALUES ('$tit','$cont','$categ','$st_id')";
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
   
?>