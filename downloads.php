<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Download files</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
  <link href="wisdom/css-buttons-master/styles/bootstrap.min.css" rel="stylesheet">

    <link href="wisdom/css-buttons-master/styles" rel="stylesheet">
    <link rel="stylesheet" href="wisdom/bootstrap-3.4.1/dist/css/bootstrap.min.css">
  <script src="wisdom/vendor/jquery/jquery.min.js"></script>
  <script src="wisdom/js/bootstrap.min.js"></script>
<style>
 
 

	
	body{
		background-size: cover;
	}
	td{
		text-align:left;
		font-size: 20px;
		font-family: 'Times New Roman', Times, serif;
		color: azure;
	}
  th{
    background-color: #B0C4DE;
  }
       h2{
         margin-top: 20px;
         
       }
       .details
       {
         text-align:center;
         
       }
       table{
        background-color: rgba(159, 178, 196, 0.3);
       }
       
    </style>
</head>

<body background = "new/image/d.jpg">
<?php include('navigation.php');?>

 

<div class="container" style="margin-top: 30px;margin-left: 50px;width: 1500px;">
 
 <!-- Content Row -->
 <div class="row" style="margin-top: 10px;">
   <!-- Sidebar Column -->
   <div class="col-lg-3 mb-4">
     <div class="list-group">
       <a href="admin_index.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info active" ><i class="glyphicon glyphicon-cog"></i><b>Home</a></b>
        <a href="Attendance.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info active" ><i class="glyphicon glyphicon-text-background"></i><b>Attendance Marking</a></b>
        <a href="payment.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><i class=" glyphicon glyphicon-usd"></i> <b>Payments</a></b>
        
          <a href="feedbackDetails.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><i class="glyphicon glyphicon-comment"></i><b>Response Feedbacks </a></b>

          <a href="upload.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><i class="glyphicon glyphicon-comment"></i><b>Upload File</a></b>



       <a href="newstudetoperation.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><i class="glyphicon glyphicon-cog"></i><b>Manage Student</a></b>
         <a href="newstudentreg.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><i class="glyphicon glyphicon-plus"></i><b>Register Student</a></b>
        <a href="addTeacher.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><i class="glyphicon glyphicon-user"></i><b>Teacher </a></b>
          <a href="addAdmin.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><i class="glyphicon glyphicon-lock"></i><b>Administrator </a></b>

        <a href="addSubject.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><i class="glyphicon glyphicon-education"></i><b>Subject</a></b>
        <a href="adminDetails.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><i class="glyphicon glyphicon-list"></i><b>Details View</a></b>
         
     </div>
   </div>
       
            <div class="col-lg-9 mb-10">
<h2 align= "center" style="font-size: 45px;color: white;">Download notes here...</h2>
<table class="table">

    <th>Subject Name</th> 
    <th>Filename</th>
    <th>Size</th>
    <th>Downloads</th>
    <th>File</th>

<tbody>
  <?php foreach ($files as $file): ?>
    <tr class="details">
      
      <td><?php echo $file['subject_name']; ?></td>
      <td><?php echo $file['f_name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>"><i class="fa fa-download"></i></td>
    </tr>

  <?php endforeach;?>

</tbody>
</table>
  </div></div>
<?php include('footer.php');?>
</body>
</html>





