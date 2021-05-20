<!DOCTYPE html>
<html>
<head>
	<title>parent details</title>
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
    border: 5px solid #ddd;
    padding: 8px;
    text-align: center;
    
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
    tr:hover {
      background-color: silver;
    }
    a{
      color:black;
    }
</style>
  
  </head>
     <body background="new/image/d.jpg">
     <?php include('navigation.php');?>

 

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
              
            <h3 style="font-size: 45px;color: white;margin-left:100px; ">Parent Details</h3>
			       <?php


                include("MainAction.php");
                $b= $ob->search("parent");

                foreach($b as $key=> $value){
                   
                }

                ?>
                 <table style="margin-left:100px;">

                          <thead>
                            <tr>
                              
                              <th scope="col">Student ID</th>

                              <th scope="col">Full Name</th>
                              <th scope="col">Guardian</th>
                              
                              <th scope="col">Telephone</th>
                              <th scope="col">Email</th>
                              <th scope="col">Sibling's Age</th>
                            </tr>
                          </thead>
                       <tbody>

                          <?php
                        $v=$ob->search("parent");
                        foreach ($v as $key => $value) {
                        $p_id=$value["p_id"];
                         $student_id=$value["student_id"];
                        $first_name=$value["parent_name"];
                        $type=$value["type"];
                        $telephone=$value["telephone"];
                        $email=$value["email"];
                        $another=$value["another_children"];


                        ?>
                    <tr>
      
                     
                       <td><?php echo $student_id; ?></td>
                      <td><?php echo $first_name;?></td>
                     
                      <td><?php echo $type;?></td>
                      <td><?php echo $telephone;?></td>
                      <td><?php echo $email;?></td>
                       <td><?php echo $another;?></td>
                       <td style="background-color:red;column-width:100px;"><?php echo"<a href='deleteparent.php?id=$student_id'>Delete</a>"?></td>;
                    
                     
                    </tr>
                  <?php

                  }


                ?>
              </tbody>
          </table>
        </div>
        
    </div>
    <?php include('footer.php');?>
	</body>
</html>






		