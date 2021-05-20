<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="wisdom/vendor/bootstrap/css/bootstrap.min.css"> 
    <link href="wisdom/css-buttons-master/styles/bootstrap.min.css" rel="stylesheet">

    <link href="wisdom/css-buttons-master/styles" rel="stylesheet">
    <link rel="stylesheet" href="wisdom/bootstrap-3.4.1/dist/css/bootstrap.min.css">
  <script src="wisdom/vendor/jquery/jquery.min.js"></script>
  <script src="wisdom/js/bootstrap.min.js"></script>
<style>
    .split {
  height: 50px;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;

 margin-left:0px;
}

.left {
  left: 0;
  background-color:#f2ffff;
}



</style>
</head>
<body>
<nav class="navbar navbar-light bg-light">
 <div class="split left">
     <p style="font-family: sans-serif;color: royalblue;font-size:xx-large;margin_left:5px;"><b>Check Student Attendance</b></p>
</div>
  <form class="form-inline">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1" style="justify-content: right;margin-left: 1100px;">HELLO
      
      </span>
  
      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value=<?php
      
      if (isset($_SESSION["username"])) {
        echo $_SESSION["username"];
      }else{
        echo "User";
      }
      
      
      ?>>
    </div>
  </form>
</nav>
 
    
     
     <div class="row">
      <div class="col col-lg-2" style="border: none;background-color: #ebebe0;">
            
      <?php include('leftbar.php')?>

      <div class ="container" style="background-color: #eff5f5;margin-left: 0px; margin-right: 0px;height:auto;width:auto;border-radius:20px" >
         
        <form action="" method="POST">
</body>
</html>