
<?php
session_start();
include('includes/config.php');

if(isset($_POST['update']))
  {
$password=md5($_POST['password']);
$newpassword=md5($_POST['newpassword']);

//$password=$_POST['password'];
//$newpassword=$_POST['newpassword'];
$u=$_SESSION["username"];
  $sql ="SELECT password FROM login WHERE username=:uname and password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $u, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update login set password=:newpassword where username=:uname";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':uname', $u, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
echo "<script>alert('Successfully Update and You must login again... ');window.location='logout.php'</script>";
}
else {
echo "<script>alert('Your Current password is Wrong.. Try Again!! ');window.location='update-password.php'</script>"; 
}
}

?>
 <!DOCTYPE html>
<html>
<head>
	<title>Home &mdash; Uva wisdom Institute</title>
	
		<!-- // Meta Tags -->
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" property="" />
	<!--testimonial flexslider-->
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,800" rel="stylesheet">
	<!--//fonts-->
	
	
	<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
	<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">

	<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}



/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.top-bar-w3layouts {
	width: 100%;
	z-index: 99999;
	background: #fff;
}



</style>
<body>
<div class="top">
					<div class="container">
						
							<div class="col-md-9 top-left">
								<ul>
									<li><i class="fa fa-map-marker" aria-hidden="true"> Badulla</a></i></li>
									<li><i class="fa fa-phone" aria-hidden="true"></i> 037 1324354</li>
									<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="#">k867.yasiru@gmail.com</a></li>
								</ul>
							</div>
							<div class="col-md-3 top-middle">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									
								</ul>
							</div>
							
							<div class="clearfix"></div>
						
					</div>
				</div>
		<div class="top-bar-w3layouts">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1 style="font-size:40px;"><a href="">Wisdom Institute</a></h1>
						
                    </div>
                    
                    
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						

					</div>	
				</nav>
			</div>

		</div>	

		<?php 
		   
		   
$u=$_SESSION['username'];

$sql = "SELECT * from login where username=:uname";
$query = $dbh -> prepare($sql);
$query -> bindParam(':uname',$u, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;

if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
		
   
	  <?php 
		
		   


$sql = "SELECT * from student where student_id=:student_id";
$query = $dbh -> prepare($sql);
$query -> bindParam(':student_id',$result->	student_id, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;

if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
		<form  method="post" enctype="multipart/form-data">
		<section class="user_profile inner_pages">
		<div class="container">
    <div class="user_profile_info gray-bg padding_4x4_40">
      <div class="upload_user_logo"> 
	<a><img src="assets/images/prof.png" alt="image"></a>
	  
	  <br><br>
	  
	  
      </div>
	  
<?php }} ?>
      <div class="dealer_info">
        <h2><?php if(isset($_SESSION["username"])){echo $_SESSION["username"];} else{echo "User";} ?></h2>
        <h4 style="color:#8585e0;">ID :<?php echo ($result->	student_id);  ?></h4>
      </div>
    </div>
  
    <div class="row">
      <div class="col-md-3 col-sm-3">
        <?php include('includes/sidebar.php');?>
      <div class="col-md-6 col-sm-8">
        <div class="profile_wrap">
<form name="chngpwd" method="post" onSubmit="return valid();">
        
            <div class="gray-bg field-title">
              <h6>Update password</h6>
            </div>
             
            <div class="form-group">
              <label class="control-label">Current Password</label>
              <input class="form-control white_bg" id="password" name="password"  type="password" required>
            </div>
            <div cl
            <div class="form-group">
              <label class="control-label">Password</label>
              <input class="form-control white_bg" id="newpassword" type="password" name="newpassword" required>
            </div>
            <div class="form-group">
              <label class="control-label">Confirm Password</label>
              <input class="form-control white_bg" id="confirmpassword" type="password" name="confirmpassword"  required>
            </div>
          <?php }} ?>
            <div class="form-group">
               <input type="submit" value="Update" name="update" id="submit" class="btn btn-block">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/Profile-setting--> 

<!-- footer -->
	<div class="footer">
	<div class="container">
		<div class="f-bg-w3l">
		<div class="col-md-4 w3layouts_footer_grid">
					<h3>About Us</h3>
					<p>description</p>
				</div>
				<div class="col-md-4 w3layouts_footer_grid hpft">
					<h3>Contact Us</h3>
					    <ul class="con_inner_text">
							<li><span class="fa fa-map-marker" aria-hidden="true"></span>211/6A Keppetipola Road,Badulla 9000  <label> Sri Lanka.</label></li>
							<li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">k867.yasiru@gmail.com</a></li>
							<li><span class="fa fa-phone" aria-hidden="true"></span> 0375741232</li>
						</ul>

					
				</div>
				<div class="col-md-4 w3layouts_footer_grid">
					<h2>Subscribe</h2>
					<p>By subscribing to our mailing list you will always get latest news from us.</p>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>
				</div>
				<div class="clearfix"> </div>		
			</div>	
			</div>
	</div>
	<p class="copyright">© 2020 Bettering. All Rights Reserved </p>
	
	<!-- //footer -->
	
</body>
</html>
