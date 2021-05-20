<?php
session_start();
include("editslideaction.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home &mdash; Uva wisdom Institute</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Bettering Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />


	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- // Meta Tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<!--testimonial flexslider-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,800" rel="stylesheet">
	<!--//fonts-->
	
		
	
	<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
  
}

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

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 4s;
  animation-name: fade;
  animation-duration: 4s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

.events-section {
    background: url(images/1.jpg) no-repeat 0px 0px;
    background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -moz-background-size: cover;
    -ms-background-size: cover;
     background-attachment: fixed;
    padding: 5em 0;
}

img.img-responsive {
	width: 100%;
	height:250px;
}

.about {   
	background: url(images/2.jpg) no-repeat 0px 0px;
	background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -moz-background-size: cover;
    -ms-background-size: cover;
	background-attachment: fixed;
	background-position:bottom-right;
    padding: 5em 0;
	
}



		.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
	
</head>
<body>

<div class="top">
					<div class="container">
						
							<div class="col-md-9 top-left">
								<ul>
									<li><i class="fa fa-map-marker" aria-hidden="true"> Badulla</i></li>
									<li><i class="fa fa-phone" aria-hidden="true"></i> 055 1324354</li>
									<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="home.php">wisdombadulla@gmail.com</a></li>
								</ul>
							</div>
							<div class="col-md-3 top-middle">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>

		
									</li>
									
									  


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
						<h1><a href="home.php">Wisdom Institute</a></h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav navbar-right">
							<li><a href="home.php" class="active">Home</a></li>
							<li><a href=""></a></li>
							
							<li><a href="slideshow_edit.php">Slideshow Edit</a></li>
							<li><a href="add_edit.php">Create Add</a></li>
						
							 
							<li><a href="adminpannel.php">Pannel</a></li>


						</ul>

					</div>

					


					
				</nav>
			</div>

		</div>
		<!-- navbar-header -->
		


<!-- slide show -->
<?php
	
		
			$values=$object->view("slideimages");
			foreach($values as $key=>$value){
				echo "<div class='slideshow-container'>

			<div class='mySlides fade'>
			  <div class='numbertext'></div>";

			  echo "<img src=".$value['image']."  style='width:100%;height:700px;' alt='image'>";

			echo "</div>";

			echo "</div>";
			}
?>

<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>

</div>
<!-- slide show -->



<!-- Advertisment -->
<div class="testimonials">
		<div class="container">
			<h3 class="title-txt"><span>A</span>dvertisment</h3>
			
			<div class="col-md-6 testimonials-main">
				<section class="slider">
					<div class="flexslider">
					<ul class='slides'>
					<?php
			

			$values=$object->addview("addcreate");
			foreach($values as $key=>$value){
						
							echo "<li>
								<div class='inner-testimonials-w3ls'>";
									echo "<a href='displayadd.php'><img src=".$value['image']." alt='image' class='img-responsive' style='width:50%;height:300px'; /></a>
									<div class='testimonial-info-wthree'>";
										echo "<h5>".$value['topic']."</h5>";
										echo "<span>".$value['subtopic']."</span>";
										echo "<p class='para-w3ls'>".$value['description']."</p>";
									echo "</div>
								</div>
							</li>";
							
						
						}
			?>
			</ul>
					</div>
				</section>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
	
	
	
	
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	
	<script src="js/main.js"></script>

	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	

	
	<script src="js/responsiveslides.min.js"></script>

	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
<!-- Advertisment -->



	
	
	
	
	<!-- News -->
	
	<div class="events-section">
		<div class="container">
			<h3 class="title-txt two"><span>O</span>ur News</h3>
			<div class="col-sm-4 live-grids-w3ls">
				<div class="live-left1">
					<img src="images/1.jpg" alt=" " class="img-responsive">
				</div>
				<div class="live-info">
					<ul>
						<li><span class="fa fa-calendar-o" aria-hidden="true"></span> 2020-01-01</li>
					</ul>
					<h4>Art</h4>
					<p class="para-1">Mathematics includes the study of such topics as quantity, structure, space, and change. It has no generally accepted definition. Mathematicians seek and use patterns to formulate new conjectures; they resolve the truth or falsity of conjectures by mathematical proof. </p>
				</div>
				
			</div>
			<div class="col-sm-4 live-grids-w3ls">
				<div class="live-left2">
					<img src="images/2.jpg" alt=" " class="img-responsive" >
				</div>
				<div class="live-info">
					<ul>
						<li><span class="fa fa-calendar-o" aria-hidden="true"></span>  2020-01-01</li>
					</ul>
					<h4>Science</h4>
					<p class="para-1"> Mathematics includes the study of such topics as quantity, structure, space, and change. It has no generally accepted definition. Mathematicians seek and use patterns to formulate new conjectures; they resolve the truth or falsity of conjectures by mathematical proof.</p>
				</div>
				
				
			</div>
			<div class="col-sm-4 live-grids-w3ls">
				<div class="live-left3">
					<img src="images/4.jpg" alt=" " class="img-responsive" >
				</div>
				<div class="live-info">
					<ul>
						<li><span class="fa fa-calendar-o" aria-hidden="true"></span> 2020-01-02</li>
					</ul>
					<h4>Commerce</h4>
					<p class="para-1"> Mathematics includes the study of such topics as quantity, structure, space, and change. It has no generally accepted definition. Mathematicians seek and use patterns to formulate new conjectures; they resolve the truth or falsity of conjectures by mathematical proof.</p>
				</div>
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- News -->



	
	<!-- servises -->
<div class="w3-agile-services">
		<div class="container">
			<h3 class="title-txt"><span>S</span>ervices</h3>
		<div class="agileits-services">
				<div class="services-right-grids">
					<div class="col-sm-4 services-right-grid">
						<div class="se-top">
							<div class="services-icon">
								<i class="fa fa-book" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>ART</h5>
								<p>Mathematics includes the study of such topics as quantity, structure, space, and change. It has no generally accepted definition. Mathematicians seek and use patterns to formulate new conjectures; they resolve the truth or falsity of conjectures by mathematical proof.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 services-right-grid">
						<div class="se-top">
							<div class="services-icon">
							<i class="fa fa-eye" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>Commerce</h5>
								<p>Mathematics includes the study of such topics as quantity, structure, space, and change. It has no generally accepted definition. Mathematicians seek and use patterns to formulate new conjectures; they resolve the truth or falsity of conjectures by mathematical proof.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 services-right-grid">
						<div class="se-top">
							<div class="services-icon">
							<i class="fa fa-flask" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>Science</h5>
								<p>Mathematics includes the study of such topics as quantity, structure, space, and change. It has no generally accepted definition. Mathematicians seek and use patterns to formulate new conjectures; they resolve the truth or falsity of conjectures by mathematical proof.</p>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				
			</div>
		</div>

</div>
	<!-- servises -->
	

	
	
	
	<!--about-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="about-right">
					<h3 class="subheading-w3-agile">About Us</h3>
					<p class="para-w3-agileits">Mathematics includes the study of such topics as quantity, structure, space, and change. It has no generally accepted definition. Mathematicians seek and use patterns to formulate new conjectures; they resolve the truth or falsity of conjectures by mathematical proof.</p>
					

				</div>
			</div>
			
		</div>
	</div>
	<!--//about-->
	
	
	
	<!-- footer -->
	<div class="footer">
	<div class="container">
		<div class="f-bg-w3l">
		<div class="col-md-4 w3layouts_footer_grid">
					<h3>About Us</h3>
					<p>Mathematics includes the study of such topics as quantity, structure, space, and change. It has no generally accepted definition. Mathematicians seek and use patterns to formulate new conjectures; they resolve the truth or falsity of conjectures by mathematical proof.</p>
				</div>
				<div class="col-md-4 w3layouts_footer_grid hpft">
					<h3>Contact Us</h3>
					    <ul class="con_inner_text">
							<li><span class="fa fa-map-marker" aria-hidden="true"></span>211/6A Keppetipola Road,Badulla 9000  <label> Sri Lanka.</label></li>
							<li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">wisdombadulla@gmail.com</a></li>
							<li><span class="fa fa-phone" aria-hidden="true"></span> 0555741232</li>
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