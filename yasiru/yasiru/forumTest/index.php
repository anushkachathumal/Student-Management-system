<html>
<head>
	<title></title>

	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!--Script-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<style>
	.backcolor{
		background-color:#0b0e3b;
		height:70px;
		padding-top:10px;
	}
	
.mySlides {display:none;}

	
</style>
<body>
	<!-- Navigation -->
	
    <nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="backcolor">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="home.php"></a>
            </div>
			
            <div class="navbar-header">
                <a class="navbar-brand" href="" style="color:white;">OUR FORUM</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            	<!--
                <ul class="nav navbar-nav navbar-left">
                    <li><a href=""><span class="glyphicon glyphicon-list"></span> Topics</a></li>
                </ul>
            -->
                <div>
					<form class="navbar-form navbar-right" method="POST"role="search" action="pages/login.php">
					<div class="form-group">
					<input type="text" class="form-control" name="username"placeholder="Username">
					<input type="password" class="form-control" name="password"placeholder="Password">
					</div>
					<button type="submit" class="btn btn-info">Login</button>
					</form>
				</div></div>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
			<div class="container" style="margin:8% auto;">
				<div class="col-sm-5 col-md-6">
				<h1></h1>
					<h1 style="color:#060833;font-size:60px; overline;font-weight: bold;">Wisdom Institute</h1><br>
					<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="images/educ.jpg" style="width:120%;height:48%;">
  <img class="mySlides" src="images/DSC_0119.jpg" style="width:120%;height:48%;">
  <img class="mySlides" src="images/2019.jpg" style="width:120%;height:48%;">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
				</div><br>
				 <div class="col-sm-5 col-md-4 pull-right">
                   <div class="row">
                   
						<form method="POST" class="form-signin" action="functions/register.php">
								<h3 class="text-center">Signup Here!</h3><br>
							<input type="text" name="fname"placeholder="First Name"class="form-control" required><br>
							<input type="text" name="lname"placeholder="Last Name"class="form-control" required><br>
							<select class="form-control" name="gender"required><br>
								<option>Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select><br>
							<input type="text" placeholder="Username" name="username"class="form-control" required><br>
							<input type="password" placeholder="Password" name="password" class="form-control" required><br>
							<input type="submit" value="Signup" class="btn btn-info" style="width:100%;">
						</form>
				</div>
			</div>
		</div>
<hr>
    
<i class="fal fa-comment-alt-medical"></i>
<i class="fa fa-commenting-o" aria-hidden="true"></i>
</body>
</html>
