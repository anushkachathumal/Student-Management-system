<?php

if (isset($_POST['search']))
 {
 	$valueTosearch = $_POST['valueTosearch'];
 	$query = "SELECT * FROM `payments` WHERE CONCAT(`id`, `studentName`, `studentId`, `month`, `total_fee`,'Subject',`paid_at` )LIKE'%".$valueTosearch."%'";
 	$search_result = filterTable($query);
}
else{

$query = "select * from payments";
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
	<title>Payment table data search</title>
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
             
        </div>
     
</div>
<div class="col-lg-9 mb-4">
              
            <h3 style="font-size: 45px;color: white;margin-left:100px; ">Check Payement Details</h3>
	<form action="paymentdetails.php" method="POST">
		<input type="text" name="valueTosearch" placeholder="value to search" style="margin-left:100px;border-radius: 5px;width: 330px;"><br><br>
		<input type="submit" name="search" value="Search" style="background-color: yellow;color: black;font-size: 20px;border-radius: 5px;width:170px;height: 45px;margin-left: 100px;margin-top: 10px;"><br><br>
		<table style="margin-left:100px;">
			 <tr>
			 	<th>ID</th>
			 	<th>Student Name</th>
			 	<th>Student ID</th>
			 	<th>Month</th>
			 	<th>Amount</th>
			 	<th>Subject </th>
			 	<th>Date and Time</th>
			 </tr>
			 <?php while($row = mysqli_fetch_assoc($search_result)):?>
			 	<tr>
			 		<td><?php echo $row['id'];?> </td>
			 		<td><?php echo $row['studentName'];?> </td>
			 		<td><?php echo $row['studentId'];?> </td>
			 		<td><?php echo $row['month'];?> </td>
			 		<td><?php echo $row['total_fee'];?> </td>
			 		<td><?php echo $row['Subject'];?> </td>

			 		<td><?php echo $row['paid_at'];?> </td>
			 	</tr>
			 <?php endwhile;?>
		</table>
	</form>
 </div>
</body>
</html>
