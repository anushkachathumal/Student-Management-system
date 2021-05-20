<?php
		include "db.php";
        $comment = mysqli_real_escape_string($con,$_POST['comment']);
		
        $userid = $_POST['userid'];
        $postid = $_POST['postid'];
        date_default_timezone_set("Asia/Taipei");
        $datetime=date("Y-m-d h:i:sa");
        $comment = mysqli_query($con,"Insert into tblcomment (comment,post_Id,student_id) values ('$comment','$postid','$userid')");
       
	   $sql = mysqli_query($con,"SELECT * from tblcomment as c join student as u on c.student_id=u.student_id where post_Id='$postid' and c.student_id='$userid'");

	 while($row=mysqli_fetch_assoc($sql)){
                     echo "<label>Comment by: </label> ".$row['first_name']." ".$row['last_name']."<br>";
                   echo '<label class="pull-right">'.$row['datetime'].'</label>';
                    echo "<p class='well'>".$row['comment']."</p>";
             }
 

              ?>