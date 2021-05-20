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

                <ul class="nav navbar-nav navbar-left">
                    <li style="margin-left:50px;"><a href="#quest" class="btn btn-danger" style="font-size:18px;color:white;padding-top:10px;">Creat Post</a></li>
                </ul>
     				
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
        <?php  include "../functions/db.php";
		

        $sel = mysqli_query($con,"SELECT * from category");
        while($row=mysqli_fetch_assoc($sel)){
            extract($row);
           echo '<div class="panel panel-success">
                    <div class="panel-heading">
                    <h3 class="panel-title">'.$category.'</h3>
                    </div> 
                    <div class="panel-body">
                    <table class="table table-stripped">
                    <tr>
                    <th>Topic title</th>
                    <th>Category</th>
                    <th>Action</th>
                    </tr>';
                    $sel1 = mysqli_query($con,"SELECT * from tblpost where cat_id='$cat_id' ");
                    while($row1=mysqli_fetch_array($sel1)){
                        extract($row1);
                        echo '<tr>';
                        echo '<td>'.$title.'</td>';
                        echo '<td>'.$category.'</td>';
                        echo '<td><a href="content.php?post_id='.$post_id.'"><button class="btn btn-danger">View</button></td>';
                        echo '</tr>';
                    }


                echo '</table>
                    </div>
                </div>';
        }
        ?>
		
		
		<div class="my-quest" id="quest">
            <div> 
                <form method="post" action="question-function.php">
                        
                         <label>Category</label>
                        <select name="category" class="form-control">
                            <option></option>
							
                            <?php $sel = mysqli_query($con,"SELECT * from category");

                                if($sel==true){
                                    while($row=mysqli_fetch_assoc($sel)){
                                        extract($row);
                                        echo '<option value='.$cat_id.'>'.$category.'</option>';
                                    }
                                }
                            ?>
                        </select>
                        <label>Topic Title</label>
                        <input type="text" class="form-control" name="title" required>
                        <label>Content</label>
                        <textarea name="content" class="form-control">
                        </textarea>
                       <br>
					   
		
   
	  				
                        <input type="hidden" name="stid" value="<?php echo $sid; ?>">
                       
                        <input type="submit" class="btn btn-danger pull-right">
						 <a href="" class="btn btn-warning" class="pull-right">Close</a>
						 
                   </form><br>
                <hr>
                 
              </div>
        </div>
<div>


</body>
</html>
<?php }} ?>
<?php }} ?>
<?php } 
else {
	header('location:../../logup.php');
}?>