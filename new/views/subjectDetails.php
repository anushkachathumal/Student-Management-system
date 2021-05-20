<!DOCTYPE html>
<html>
<head>
	<title>subjets</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style>
    th, td {
    border: 1px solid dodgerblue;
    padding: 8px;
    text-align: center;
    font-size: 17px;
    
    }
    thead{
    color: black ;
    background-color: cornflowerblue;
    ;
    }
    table{
    
      width: 100%;
      margin: auto;
    }
    tbody{
      background-color:  #F5F5F5;
    }
    h3{
      color:cornflowerblue;
      
    }
    body{
      font-family: 'Times New Roman', Times, serif;
      
    }
    tr:hover {
      background-color: silver;
    }
  </style> 
  
  </head>
     <body>
     <?php include('navigation.php');?>

 

<div class="container" style="margin-top: 30px;margin-left: 50px;width: 1500px;">
   <!-- Content Row -->
   <div class="row" style="margin-top: 30px;">
     <!-- Sidebar Column -->
     <div class="col-lg-3 mb-4">
       <div class="list-group">
         <a href="adminbar.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info active" ><b>Home</a></b>
          <a href="adminbar.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info active" ><b>Attendance Marking</a></b>
          <a href="view booking.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"> <b>Payments</a></b>
           <a href="emailsend.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><b>Forum</a></b>
         <a href="#" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><b>Student</a></b>
          <a href="#" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><b>Teacher </a></b>
            <a href="#" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><b>Administrator </a></b>

          <a href="ForumAdmin.php" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><b>Subject</a></b>
            <a href="#" style="font-size: 15px;" class="list-group-item bg-light text-dark border border-info"><b>Feedbacks </a></b>
       </div>
     </div>
       
            <div class="col-lg-9 mb-4">
            <h3>Subject Details</h3>
			        <?php


                include("MainAction.php");
                $b= $ob->search("subject");

                foreach($b as $key=> $value){
                   
                }

                ?>
                
                  
                 <table>

                          <thead>
                            <tr>
                              
                              <th scope="col">Subject code</th>
                              <th scope="col">Subject Name</th>
                              <th scope="col">Description</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                       <tbody>

                          <?php
                        $v=$ob->search("subject");
                        foreach ($v as $key => $value) {
                       
                        $subject_code["subject_code"];
                        $subject_name=$value["subject_name"];
                        $details=$value["details"];
                        ?>
                    <tr>
      
                      <td><?php echo $subject_code;?></td>
                      <td><?php echo $subject_name;?></td>
                      <td><?php echo $details; ?></td>
                      
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






		