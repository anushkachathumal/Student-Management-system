
<? php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Pannel</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
  <link href="wisdom/css-buttons-master/styles/bootstrap.min.css" rel="stylesheet">

    <link href="wisdom/css-buttons-master/styles" rel="stylesheet">
    <link rel="stylesheet" href="wisdom/bootstrap-3.4.1/dist/css/bootstrap.min.css">
  <script src="wisdom/vendor/jquery/jquery.min.js"></script>
  <script src="wisdom/js/bootstrap.min.js"></script>
  <style>
    th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
    font-size: 17px;
  }
  thead{
    color: #191970;
    background-color: #B0C4DE;
  }
  table{
    border-collapse: collapse;
    width:1100px;
    margin: auto;
  }
  tbody{
    background-color:  #F5F5F5;
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
       <?php include('navigation.php');?>

 

 <div class="container" style="margin-top: 30px;margin-left: 50px;width: 1500px;">
 
    <!-- Content Row -->
    <div class="row" style="margin-top: 30px;">
      <!-- Sidebar Column -->
      <div class="col-lg-3 mb-4">
        <div class="list-group">
          <a href="admin_index.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info active" ><i class="glyphicon glyphicon-cog"></i><b>Home</a></b>
           <a href="Attendance.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info active" ><i class="glyphicon glyphicon-text-background"></i><b>Attendance Marking</a></b>
           <a href="payment.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><i class=" glyphicon glyphicon-usd"></i> <b>Payments</a></b>
           
             <a href="feedbackDetails.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><i class="glyphicon glyphicon-comment"></i><b>Response Feedbacks </a></b>

             <a href="upload.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><i class="glyphicon glyphicon-comment"></i><b>Upload File</a></b>
			 <a href="forumTest/admin/home.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><i class="glyphicon glyphicon-list"></i><b>Manage Forum</a></b>


          <a href="sform.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><i class="glyphicon glyphicon-cog"></i><b>Manage Student</a></b>
            <a href="newstudentreg.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><i class="glyphicon glyphicon-plus"></i><b>Register Student</a></b>
           <a href="addTeacher.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><i class="glyphicon glyphicon-user"></i><b>Teacher </a></b>
             <a href="addAdmin.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><i class="glyphicon glyphicon-lock"></i><b>Administrator </a></b>

           <a href="addSubject.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><i class="glyphicon glyphicon-education"></i><b>Subject</a></b>
           <a href="adminDetails.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><i class="glyphicon glyphicon-list"></i><b>Details View</a></b>
            
        </div>
      </div>
      

<div class="col-lg-9 mb-4">
            <h3 style="font-size: 45px;color: white;">Online Enrolled Student</h3>
             <?php


                include("MainAction.php");
                $b= $ob->search("online_eenroll");

                foreach($b as $key=> $value){
                   
                }

                ?>
                  
                 <table >

                          <thead>
                            <tr>
                              <th scope="col">Student Name</th>
                              <th scope="col">Student ID</th>
                              <th scope="col">Address</th>
                              <th scope="col">Email</th>
                              
                             
                              
                            </tr>
                            
                          </thead>
                       <tbody>

                          <?php
                        $v=$ob->search("online_eenroll");
                        foreach ($v as $key => $value) {
                        $student_id=$value["full_name"];
                        $first_name=$value["id_num"];
                        $last_name=$value["address"];
                        $address=$value["email"];
                        $telephone=$value["telephone"];
                        $email=$value["subject"];
                        


                        ?>
                    <tr>
      
                      <td><?php echo $student_id; ?></td>
                      <td><?php echo $first_name;?></td>
                      <td><?php echo $last_name;?></td>
                       <td><?php echo $address;?></td>
                        
                          <td> <button class="w3-button w3-green" style="padding: 15px;width: 120px;"><a href="onlineregisteredstudent.php"  style="color: black;">Search</a></button></td>

 <td><button class="w3-button w3-red" style="padding: 15px;margin: 6px;width: 120px;color:red;"><?php echo"<a href='deleteoe.php?id=$first_name'>Delete</a>"?></button></td>
                     
                       
                     
                    </tr>
                  <?php

                  }


                ?>


              </tbody>

          </table>

        </div>







       </div>
    </div>

      <?php include('footer.php');?>
  </body>
</html>
