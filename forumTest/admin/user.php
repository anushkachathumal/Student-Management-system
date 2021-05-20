<?php


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
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
	<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:#001a4d;:40px;">
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
                <a class="navbar-brand" href="home.php">Administrator</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            	
                <ul class="nav navbar-nav navbar-left">
                   <li><a href="home.php"> Dashboard</a></li>
                    <li><a href="post.php"> Topics</a></li>
                    <li  class="active"><a href="user.php"> Users</a></li>
                    <li><a href="category.php">Category</a></li>


                </ul>
            

                
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="container" style="margin:8% auto;width:900px;">
	<h1 style="color:#060833;font-size:60px; overline;font-weight: bold;">Wisdom Institute</h1>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Users</h3>
                </div> 
                 <div class="panel-body">
            <table class="table table-stripped">
                                <th>Username</th>
                                <th>Name</th>
                                <th>Email</th>
                                
                            <?php
                            
                            include "../functions/db.php";

                            $sql = "SELECT * from student as tu join login as ta on tu.student_id=ta.student_id";
                            $run = mysqli_query($con,$sql);

                            while($row=mysqli_fetch_array($run))
                            {
                                extract($row);
                                echo "<tr>";
                                echo "<td>".$username."</td>";
                                echo "<td>".$first_name.' '.$last_name."</td>";
                                echo "<td>".$email."</td>";
                               
                                echo "</tr>";
                            }
                           

                            ?>
                            </table>
                     </div>
                </div>

            </div>
            <script type="text/javascript">

            function deleteuser(user_Id){
                var datastring = 'action=deleteuser&user_Id='+user_Id;
                var con = confirm("Are you sure you want to delete?");
                if(con==true){
                    $.ajax({
                    type: "POST",
                    url: "functions/crud.php",
                    data: datastring,
                    success: function(result){
                        if(result=="success"){
                            window.location.href="user.php";
                        }
                        else{
                            alert("Failed to delete");
                        }
                    }
                });
                }
                
                return false;
            }

            </script>
	</body>
</html>

