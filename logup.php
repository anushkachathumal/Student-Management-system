


<!DOCTYPE html>
<html>
<head>
	<title>| Login</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Simple Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
  
  <style>
    th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
  }
  thead{
    color: #191970;
    background-color: #B0C4DE;
  }
  table{
    border-collapse: collapse;
    width: 100%;
    margin: auto;
  }
  tbody{
    background-color:  #F5F5F5;
  }
  h3{
    color: #4169E1;
    
  }
  .login-form {
    width: 340px;
      margin: 50px auto;
  }
    .login-form form {
      margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }

</style>
  </head>
     <body background="new/image/d.jpg">
       <?php include("loginnavigation.php");?>

 <div class="login-form">
    <form action="logAction.php" method="post">
      
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" id="myInput" class="form-control" placeholder="Password" required="required">
        </div>
		<div style="font-size:13px;" class="form-group">
		 <input  type="checkbox" onclick="myFunction()"> Show Password
		</div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" style="background-color:blue; ">Log in</button>
        </div>
        <div class="clearfix">
            
          
        </div>        
    </form>
   <script>
   function myFunction(){
	   var x=
	   document.getElementById("myInput");
	   if(x.type==="password"){
		   x.type="text";
	   }else{
		   x.type="password";
	   }
   }
   </script>
</div>

  <?php include("footer.php");?>
	</body>
</html>






		