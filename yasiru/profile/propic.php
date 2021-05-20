<?php 
session_start();
include('includes/config.php');
if(isset($_POST['updatepropic']))
  {
			$stid=$_POST['sid'];
			$img=$_FILES['img'];
			$img=$_FILES['img']["tmp_name"];
			$name=$_FILES['img']["name"];
			$path="../uplords/profilepic/".$name;
			$upload=move_uploaded_file($img,$path);
			
$sql="update student set path=:path where student_id=:st_id";

$query = $dbh->prepare($sql);
$query->bindParam(':path',$path,PDO::PARAM_STR);
$query->bindParam(':st_id',$stid,PDO::PARAM_STR);
$query->execute();

if($query->execute())
{
echo "<script>alert('Successfully Update... ');window.location='propic.php'</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
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
						<h1 style="font-size:40px;"><a>Wisdom Institute</a></h1>
						<h1 style="font-size:25px;margin-left:300px;"><a>Change Your Profile Picture</a></h1>
                    </div>
                    
                    
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						

					</div>	
				</nav>
			</div>

		</div>	
		


		
		<!-- navbar-header -->
		
		
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

		
		<form  method="post"  enctype="multipart/form-data">
		<section class="user_profile inner_pages">
		<div class="container">
    <div class="user_profile_info gray-bg padding_4x4_40">
      <div class="upload_user_logo"> 
	  <?php 
	  if(($result->path)){ ?>
	  <img src="<?php echo ($result->path); ?>" alt="image">  
	
	 <?php }
	  else { ?>
	<img src="assets/images/prof.png" alt="image">
	 <?php }
	?>
	  <br><br>
	  <input type="file" name="img" alt="image">
	  
      </div>
	  

      <div class="dealer_info">
        <h2><?php if(isset($_SESSION["username"])){echo $_SESSION["username"];} else{echo "User";} ?></h4>
		<h4 style="color:#666699;"><?php echo ($result->	first_name); ?> <?php echo ($result->	last_name); ?></h3>
		<div class="form-group">
              <label class="control-label">Student ID :</label>
              <input class="form-control white_bg" style="font-weight: bold;color:red;font-size:17px;" name="sid" value="<?php echo ($result->	student_id);?>" id="fullname" type="text"  required readonly>
            </div>
      		
      </div>
    </div>
  
   
			
           
            <div class="form-group">
			<button type="submit" style="margin-left:240px;" name="updatepropic" class="btn">Update Profile Picture <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            <button type="button" style="margin-left:10px;"  onclick="document.location.href='profile.php'" class="btn">Back<span class="angle_arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></span></button>
			</div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

 <?php }} ?>
            <?php }} ?>
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