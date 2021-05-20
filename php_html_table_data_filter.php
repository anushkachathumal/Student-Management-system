<?php

if (isset($_POST['search']))
 {
 	$valueTosearch = $_POST['valueTosearch'];
 	$query = "SELECT * FROM `attendance` WHERE CONCAT(`attendance_id`, `student_id`, `first_name`, `last_name`, `subject`,`date_time`)LIKE'%".$valueTosearch."%'";
 	$search_result = filterTable($query);
}
else{

$query = "select * from attendance";
$search_result = filterTable($query);

}
function filterTable($query){
	$connect = mysqli_connect("localhost","root","","wisdom");
	$filter_Result = mysqli_query($connect, $query);
	return $filter_Result;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Attendance table data search</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="wisdom/css-buttons-master/styles/bootstrap.min.css" rel="stylesheet">

    <link href="wisdom/css-buttons-master/styles" rel="stylesheet">
    <link rel="stylesheet" href="wisdom/bootstrap-3.4.1/dist/css/bootstrap.min.css">
  <script src="wisdom/vendor/jquery/jquery.min.js"></script>
  <script src="wisdom/js/bootstrap.min.js"></script>
	 <style>
    th{
    border: 5px solid #ddd;
    padding: 8px;
    text-align: center;
    background-color: #B0C4DE;
    color:blue;
    
  }
  td{
  	border: 5px solid #ddd;
    padding: 8px;
    text-align: center;
    background-color: white;
  }
  thead{
    color: #191970;
    background-color: #B0C4DE;
    width: 30px;
  }
  table{
    border-collapse: collapse;
    width: 1000px;
    margin: auto;
  }
  tbody{
    background-color:  #F5F5F5;
    font-size: 17px;
  }
  h3{
    color: #4169E1;
    
  }
  a{
  	color:black;
  }
</style>
</head>
<body background="new/image/d.jpg">
	<?php include 'navigation.php';?>

	<div class="container" style="margin-top: 10px;margin-left: 50px;width: 1500px;">
   <!-- Content Row -->
   <div class="row" style="margin-top: 30px;">
     <!-- Sidebar Column -->
      <div class="col-lg-3 mb-4" style="margin-top: 30px;">
         <div class="list-group" style="padding:0px;height: 300px;">
          <a href="adminDetails.php" style="font-size: 20px;height:90px;width: 350px;margin-right: 5px;" class="list-group-item bg-light text-dark border border-info active" ><i class="glyphicon glyphicon-cog"></i>&nbsp;<b>View Administrator Details</a></b>

           <a href="studentDetails.php" style="font-size: 20px;height:90px;width: 350px;margin-right: 5px;" class="list-group-item bg-light text-dark border border-info active" ><i class="glyphicon glyphicon-text-background"></i>&nbsp;<b>View Student Details</a></b>

           <a href="teacherDetails.php" style="font-size: 20px;height:90px;width: 350px;margin-right: 5px;" class="list-group-item bg-light text-dark border border-info"><i class=" glyphicon glyphicon-usd"></i><b>View Teacher Details</a></b>

            <a href="parentDetails.php" style="font-size: 20px;height:90px;width: 350px;margin-right: 5px;" class="list-group-item bg-light text-dark border border-info"><i   class=" glyphicon glyphicon-user"></i>&nbsp;<b>View Parent Details</a></b>

            <a href="SubjectDetails.php" style="font-size: 20px;height:90px;width: 350px;margin-right: 5px;" class="list-group-item bg-light text-dark border border-info"><i   class=" glyphicon glyphicon-education"></i>&nbsp;<b>View Subject Details</a></b>

             <a href="php_html_table_data_filter.php" style="font-size: 20px;height:90px;width: 350px;margin-right: 5px;" class="list-group-item bg-light text-dark border border-info"><i   class=" glyphicon glyphicon-search"></i>&nbsp;<b>View Attendance Details</a></b>


              <a href="adminpannel.php" style="font-size: 20px;height:90px;width: 350px;margin-right: 5px;" class="list-group-item bg-light text-dark border border-info"><i   class=" glyphicon glyphicon-user"></i>&nbsp;<b>View Online enrolled Details</a></b>

               <a href="paymentdetails.php" style="font-size: 20px;height:90px;width: 350px;margin-right: 5px;" class="list-group-item bg-light text-dark border border-info"><i   class=" glyphicon glyphicon-user"></i>&nbsp;<b>View Payment Details</a></b>
             
        </div>
     
</div>
<div class="col-lg-9 mb-4">
              
            <h3 style="font-size: 45px;color: white;margin-left:100px; ">Check Attendance Details</h3>
	<form action="php_html_table_data_filter.php" method="POST">
		<input type="text" name="valueTosearch" placeholder="value to search" style="margin-left:100px;border-radius: 5px;width: 330px;"><br><br>
		<input type="submit" name="search" value="Search" style="background-color: yellow;color: black;font-size: 20px;border-radius: 5px;width:170px;height: 45px;margin-left: 100px;margin-top: 10px;">
		  <button type="button" style="background-color: green;color: black;font-size: 20px;border-radius: 5px;width:170px;height: 45px;margin-left: 100px;margin-top: 10px;margin-bottom: 10px;" class="btn btn-primary"><a href="subjectDetails.php" font-size: 18px;">Subject Details</button>
		  </a>
		<table style="margin-left:100px;">
			 <tr>
			 	 <th scope="col">Attendance ID</th>
			 	 <th scope="col">Student ID</th>
			 	 <th scope="col">First Name</th>
			 	 <th scope="col">Last Name</th>
			 	 <th scope="col">Subject</th>
			 	 <th scope="col">Date and Time</th>
			 </tr>
			 <?php while($row = mysqli_fetch_assoc($search_result)):?>
			 	<tr>
			 		<td><?php echo $row['attendance_id'];?> </td>
			 		<td><?php echo $row['student_id'];?> </td>
			 		<td><?php echo $row['first_name'];?> </td>
			 		
			 		<td><?php echo $row['last_name'];?> </td>
			 		<td><?php echo $row['subject'];?> </td>

			 		<td><?php echo $row['date_time'];?> </td>
			 	</tr>
			 <?php endwhile;?>
		</table>
	</form>
 </div>
</body>
</html>
