<?php
  session_start();
include('config_2.php');

if(isset($_SESSION["user"])){
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
{
	
	$sql = "SELECT * from student where student_id=:student_id";
$query = $dbh -> prepare($sql);
$query -> bindParam(':student_id',$result->	student_id, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;

if($query->rowCount() > 0)
{
foreach($results as $result)
{ 
$sid=$result->student_id;

?>
<html>
<head>
	<title></title>

	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!--Script-->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>

<style>
	.backcolor{
		background-color:#0b0e3b;
		height:70px;
		padding-top:10px;
	}
	.backcont{
			width:100%;
			margin-top:0;
			margin-bottom:0;
			padding:50px;
			border-radius:60px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			
		}
</style>
</head>
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
                <a class="navbar-brand" href="home.php" style="color:white;">OUR FORUM</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">

                
     				
					 <ul class="nav navbar-nav navbar-right">
                         <li><a href="#" style="color:white;font-size:18px;"><span class="glyphicon glyphicon-user" style="color:white;"></span> <?php if(isset($_SESSION["user"])){echo $_SESSION["user"];} else{echo "User";} ?></a></li>
                        <li><a href="../../profile/profileTest.php" style="color:white;font-size:20px;"><span class="glyphicon glyphicon-th-list"></span> Profile</a></li>
						
						<li><a href="../logout.php" style="color:white;font-size:20px;"><span class="glyphicon glyphicon-log-out"></span> logout</a></li>
						<!--<li ><a href="logout.php" class="" style="color:white;font-size:20px;"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>-->
                
                </ul>		
			
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container" style="margin:7% auto;">
	<h1 style="color:#060833;font-size:60px; overline;font-weight: bold;">Wisdom Institute</h1>
	
	 <div class="backcont">
    	<h4>Latest Discussion</h4>
    	<hr>
         <div class="panel panel-success">
                <div class="panel-heading">
                    
                </div> 
                 <div class="panel-body">
         
              
                
                            <?php

                include "../functions/db.php";
                     $id=$_GET['post_id'];
                     
                
                $sql = mysqli_query($con,"SELECT * from tblpost as tp join category as c on tp.cat_id=c.cat_id where tp.post_Id='$id' ");
                if($sql==true){
                  while($row=mysqli_fetch_array($sql)){
                    extract($row);
                    if($sid==00){
                       echo "<label>Topic Title: </label> ".$title."<br>";
                       echo "<label>Topic Category: </label> ".$category."<br>";
                       echo "<label>Date time posted: </label> ".$datetime;
                       echo "<p class='well'>".$content."</p>";
                       echo "<label>Posted By: </label> Admin";
                    }
                    else{
                      $sel = mysqli_query($con,"SELECT * from student where student_id='$sid' ");
                      while($row=mysqli_fetch_array($sel)){
                        extract($row);
                        echo "<label>Topic Title: </label> ".$title."<br>";
                       echo "<label>Topic Category: </label> ".$category."<br>";
                       echo "<label>Date time posted: </label> ".$datetime;
                       echo "<p class='well'>".$content."</p>";
                       echo '<label>Posted By: </label>'.$first_name.' '.$last_name;
                      }
                      
                    }
                    
         
                }
                }
                
              
                    
              ?>

              
              <div id="comments">
			  <br><br><label style="font-size:24px;color:red">Comments :</label><br>
			  </div>
              <?php 
             $postid= $_GET['post_id'];
			 $sql = mysqli_query($con,"SELECT * from tblcomment as c join student as u on c.student_id=u.student_id where post_id='$postid' order by datetime");
             //$sql = mysqli_query($con,"SELECT * from tblcomment");
             $num = mysqli_num_rows($sql); 
             if($num>0){
             while($row=mysqli_fetch_assoc($sql)){
                   echo "<label>Comment by: </label> ".$row['first_name']." ".$row['last_name']."<br>";
                   echo '<label class="pull-right">'.$row['datetime'].'</label>';
                   echo "<p class='well'>".$row['comment']."</p>"; 
						//echo "<br>";
			}
		
           }
			
              ?>
            </div>
              </div>
          </div>
          <hr>
            <div class="col-sm-5 col-md-5 sidebar">
          <h3>Comment</h3>
          <form method="POST" action="content.php">
            <textarea type="text" name="comment" class="form-control" id="commenttxt"></textarea><br>
            <input type="hidden" name="postid" id="postid" value="<?php echo $_GET['post_id']; ?>">
            <input type="hidden" name="userid" id="userid" value="<?php echo $sid ?>">
            <input type="submit" name="comsave" id="save" class="btn btn-danger pull-right" value="Comment">
			
          </form>
        </div>
    </div>

		<div class="my-quest" id="quest">
            <div> 
                <form method="POST" action="question-function.php">
                        
                         <label>Category</label>
                        <select name="category" class="form-control">
                            <option>Select Category......</option>
                            
                        </select>
                        <label>Topic Title</label>
                        <input type="text" class="form-control" name="title"required>
                        <label>Content</label>
                        <textarea name="content"class="form-control">

                        </textarea>
                       <br>
                        <input type="submit" class="btn btn-success pull-right" value="Post">
						 <a href="" class="btn btn-warning" class="pull-right">Close</a>
                   </form><br>
                <hr>
                 
              </div>
        </div>
</body>

<script>

$("#save").click(function(){
var postid = $("#postid").val();
var userid = $("#userid").val();
var comment = $("#commenttxt").val();
var datastring = 'postid=' + postid + '&userid=' + userid + '&comment=' + comment;
if(!comment){
  alert("Please enter some text comment");
}
else{
  $.ajax({
    type:"POST",
    url: "../functions/addcomment.php",
    data: datastring,
    cache: false,
    success: function(result){
      document.getElementById("commenttxt").value=' ';
      $("#comments").append(result);
    }
  });
}
return false;
})

</script>
</html>
<?php }} ?>
<?php }} ?>
<?php } 
else {
	header('location:../../logup.php');
}?>