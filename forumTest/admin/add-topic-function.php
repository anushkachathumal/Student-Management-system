<?php
include "../functions/db.php";
 					date_default_timezone_set("Asia/Taipei");
                        $datetime=date("Y-m-d h:i:sa");
extract($_POST);

$sql = "INSERT INTO tblpost(title, content, cat_id, datetime , student_id) VALUES ('$title','$content','$category','$datetime','$student_id')";
$res = mysqli_query($con,$sql);

header("Location:post.php");


?>