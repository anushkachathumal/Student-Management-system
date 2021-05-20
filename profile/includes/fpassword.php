
<?php
session_start();
error_reporting(0);
include('includes/config.php');




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
.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
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
		   
		   
$uname=$_SESSION["user"];

$sql = "SELECT * from login where username=:uname";
$query = $dbh -> prepare($sql);
$query -> bindParam(':uname',$uname, PDO::PARAM_STR);
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
		<?php
if(isset($_POST['update']))
  {
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$newpassword=md5($_POST['newpassword']);
  $sql ="SELECT EmailId FROM tblusers WHERE EmailId=:email and ContactNo=:mobile";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update tblusers set Password=:newpassword where EmailId=:email and ContactNo=:mobile";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
$chngpwd1-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
echo "<script>alert('Your Password succesfully changed');</script>";
}
else {
echo "<script>alert('Email id or Mobile no is invalid');</script>"; 
}
}

?>
  <script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>
<div class="modal fade" id="forgotpassword">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Password Recovery</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="forgotpassword_wrap">
            <div class="col-md-12">
              <form name="chngpwd" method="post" onSubmit="return valid();">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Your Email address*" required="">
                </div>
  <div class="form-group">
                  <input type="text" name="mobile" class="form-control" placeholder="Your Reg. Mobile*" required="">
                </div>
  <div class="form-group">
                  <input type="password" name="newpassword" class="form-control" placeholder="New Password*" required="">
                </div>
  <div class="form-group">
                  <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password*" required="">
                </div>
                <div class="form-group">
                  <input type="submit" value="Reset My Password" name="update" class="btn btn-block">
                </div>
              </form>
              <div class="text-center">
                <p class="gray_text">For security reasons we don't store your password. Your password will be reset and a new one will be send.</p>
                <p><a href="#loginform" data-toggle="modal" data-dismiss="modal"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back to Login</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/Profile-setting--> 
<?php include('includes/forgotpassword.php');?>

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
<?php }} ?>
<?php }} ?>