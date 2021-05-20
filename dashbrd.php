<!DOCTYPE html>
<html>
<head>
	<title>Dash</title>
	 <link rel="stylesheet" type="text/css" href="wisdom/vendor/bootstrap/css/bootstrap.min.css"> 
    
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<!--testimonial flexslider-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,800" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>


	<div class="top">
					<div class="container">
						
							<div class="col-md-9 top-left">
								<ul>
									<li><i class="fa fa-map-marker" aria-hidden="true"> Badulla</i></li>
									<li><i class="fa fa-phone" aria-hidden="true"></i> 037 1324354</li>
									<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="#">wisdom@gmail.com</a></li>
								</ul>
							</div>
							<div class="col-md-3 top-middle">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li></li></li>	
								</ul>
							</div>
							</div>
						</div>

 <div class="container" style="margin-top: 30px;margin-left: 50px;border: solid;">
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
        <h2>Bookings</h2>
       
        <div class="container mt-4">
			     <div class="row">
			       <?php


                include("MainAction.php");
                $b= $ob->search("admin");

                foreach($b as $key=> $value){
                   
                }

                ?>
                  <h3>Admin Details</h3>
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



</body>
</html>