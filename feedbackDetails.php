<!DOCTYPE html>
<html>
<head>
	<title>feedback</title>
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
    border: 1px solid dodgerblue;
    padding: 8px;
    text-align: center;
    font-size: 17px;
    
    }
    thead{
    color: black ;
    background-color: cornflowerblue;
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
     
      
    }
    tr:hover {
      background-color: silver;
    }
    a{
      color: black;
     
    }
    .success{
    color:midnightblue;
    font-weight: bolder;
    }
    .fail{
    color:red;
    font-weight: bolder;
    }
  </style> 
  </head>
     
          <body background="new/image/d.jpg">
     <?php include('navigation.php');?>

 

<div class="container" style="margin-top: 30px;margin-left: 50px;width: 1500px;">
   <!-- Content Row -->
   <div class="row" style="margin-top: 30px;">
     <!-- Sidebar Column -->
      <div class="col-lg-3 mb-4" style="margin-top: 50px;">
         <div class="list-group" style="padding:0px;height: 300px;">
          <a href="adminDetails.php" style="font-size: 20px;height:90px;width: 350px;margin-right: 5px;" class="list-group-item bg-light text-dark border border-info active" ><i class="glyphicon glyphicon-cog"></i>&nbsp;<b>View Administrator Details</a></b>

           <a href="studentDetails.php" style="font-size: 20px;height:90px;width: 350px;margin-right: 5px;" class="list-group-item bg-light text-dark border border-info active" ><i class="glyphicon glyphicon-text-background"></i>&nbsp;<b>View Student Details</a></b>

           <a href="teacherDetails.php" style="font-size: 20px;height:90px;width: 350px;margin-right: 5px;" class="list-group-item bg-light text-dark border border-info"><i class=" glyphicon glyphicon-usd"></i><b>View Teacher Details</a></b>

            <a href="parentDetails.php" style="font-size: 20px;height:90px;width: 350px;margin-right: 5px;" class="list-group-item bg-light text-dark border border-info"><i   class=" glyphicon glyphicon-user"></i>&nbsp;<b>View Parent Details</a></b>

            <a href="subjectDetails.php" style="font-size: 20px;height:90px;width: 350px;margin-right: 5px;" class="list-group-item bg-light text-dark border border-info"><i   class=" glyphicon glyphicon-education"></i>&nbsp;<b>View Subject Details</a></b>

             <a href="php_html_table_data_filter.php" style="font-size: 20px;height:90px;width: 350px;margin-right: 5px;" class="list-group-item bg-light text-dark border border-info"><i   class=" glyphicon glyphicon-search"></i>&nbsp;<b>View Attendance Details</a></b>

              <a href="adminpannel.php" style="font-size: 20px;height:90px;width: 350px;margin-right: 5px;" class="list-group-item bg-light text-dark border border-info"><i   class=" glyphicon glyphicon-user"></i>&nbsp;<b>View Online enrolled Details</a></b>

               <a href="paymentdetails.php" style="font-size: 20px;height:90px;width: 350px;margin-right: 5px;" class="list-group-item bg-light text-dark border border-info"><i   class=" glyphicon glyphicon-user"></i>&nbsp;<b>View Payment Details</a></b>
       </div>
     </div>
       
            <div class="col-lg-9 mb-4">
              
             <h3 style="font-size: 45px;color: white;margin-left:100px; ">Received Feedbacks</h3>
			        <?php
                include("MainAction.php");
                $b= $ob->search("feedback");
                foreach($b as $key=> $value){
                } ?>
                  <table style="margin-left:100px; ">
                      <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Comment</th>
                            <th scope="col">Action</th>
                          </tr>
                              
                      </thead>
                    <tbody>

                          <?php
                        $v=$ob->search("feedback");
                        foreach ($v as $key => $value) {
                        $name=$value["name"];
                        $email=$value["email"];
                        $description=$value["description"];
                        ?>
                    <tr>
      
                      <td><?php echo $name; ?></td>
                      <td><?php echo $email; ?></td>
                      <td><?php echo $description; ?></td>
                      <td style="background-color:green;"><?php echo "<a href='email.php?email_id={$value['feedback_id']}'>Reply</a>" ?></td>
                       <td style="background-color:red;"><?php echo"<a href='deletefeedback.php?id=$name'>Delete</a>"?></td>;
                    </tr>
                  <?php
                  }
                ?>
                </tbody>
              </table>
            </div>
          </div>

          <?php
              if(ISSET($_SESSION['status'])){
                if($_SESSION['status'] == "ok"){
            ?>
                  <div class="success"><?php echo $_SESSION['result']?></div>
            <?php
                }else{
            ?>
                  <div class="fail"><?php echo $_SESSION['result']?></div>
            <?php
                }
                
                unset($_SESSION['result']);
                unset($_SESSION['status']);
              }
            ?>
             <?php include('footer.php');?>
	    </body>
</html>






		