<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

  .border {
    display: inline-block;
    width: 70px;
    height: 70px;
    margin: 6px;
  }
body {
  margin: 0 auto;
  max-width: 1100px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}




ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  
}

li {
  float: left;
  margin-left:40px;
  
}




</style>
</head>
<body>


<?php

			include("editslideaction.php");

			$values=$object->forumview("diss_forum");
			foreach($values as $key=>$value){
				
				$id=$value['forum_id'];
				echo "<div  class='container'>";
				  echo "<img src='' alt='img' style='width:100%;'>";
				  echo "<table class='table table-striped '>";
						
				  echo "<tr><td>Student_ID : ".$value['student_id']."</td>";
				  echo "<td>Subject_ID : ".$value['subject_id']."</td>";
				  echo "<td>Subject_Heding : ".$value['subject']."</td></tr></table>";
				   
				 
				  echo "<h4>Forum_ID : ".$value['forum_id']."</h4>";
				   echo "<p>".$value['massage']."</p>
				  <span class='time-right'>time</span>";
						
						
				  echo "<a href='displayadd.php' class='btn btn-dark'>Answer</a>  <a href='editslideaction.php?forum_id=$id' class='btn btn-secondary' style='margin-left:10px;'>Delete</a> <input type='button' class='btn btn-info' value='Edit' style='margin-left:10px;'>";
				
 echo "</div>";
 

 }
		?>
				  
 


</body>
</html>
