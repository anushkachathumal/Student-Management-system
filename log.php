<!DOCTYPE html>
<html>
<head>
  <title>admin details</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  
  <style>
    th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
  }
  thead{
    color: #191970;
    background-color: #B0C4DE;
  }
  table{
    border-collapse: collapse;
    width: 100%;
    margin: auto;
  }
  tbody{
    background-color:  #F5F5F5;
  }
  h3{
    color: #4169E1;
    
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
                  <h3>Admin Details</h3>
                    <?php


                include("MainAction.php");
                $b= $ob->search("admin");

                foreach($b as $key=> $value){
                   
                }

                ?>
                 <table>
                       <thead>
                            <tr>
                              <th scope="col">Admin Id</th>
                              <th scope="col">First Name</th>
                              <th scope="col">Last Name</th>
                              <th scope="col">Address</th>
                              <th scope="col">Telephone</th>
                              <th scope="col">Email</th>
                            </tr>
                          </thead>
                       <tbody>

                          <?php
                        $v=$ob->search("admin");
                        foreach ($v as $key => $value) {
                        $admin_id=$value["admin_id"];
                        $first_name=$value["first_name"];
                        $last_name=$value["last_name"];
                        $address=$value["address"];
                        $telephone=$value["telephone"];
                        $email=$value["email"];


                        ?>
                    <tr>
      
                      <td><?php echo $admin_id; ?></td>
                      <td><?php echo $first_name;?></td>
                      <td><?php echo $last_name;?></td>
                      <td><?php echo $address;?></td>
                      <td><?php echo $telephone;?></td>
                      <td><?php echo $email;?></td>
                     
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






    