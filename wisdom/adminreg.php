


<?php
  session_start();
include('MainAction.php');
 

$id=$_POST["id_number"];
    $v=$ob->search_value_by("student","student_id",$id);
    
    foreach($v as $key=> $value){
        $id1= $value["student_id"];
        $firstname= $value["first_name"];
        $lastname= $value["last_name"];
        $address= $value["address"];
        $tel= $value["telephone"];
        $mail= $value["email"];
        $path=$value["path"];
        $status= $value["status"];
        $type= $value["type"];
        
    }

  


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin reg</title>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> 
    <link href="css-buttons-master/styles/bootstrap.min.css" rel="stylesheet">

    <link href="css-buttons-master/styles" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-3.4.1/dist/css/bootstrap.min.css">
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <style>
      body{
        background-color: #ebebe0;
      }
    .header{
width: auto;
  height:55px;
  background-color: royalblue;
 
  border-radius: 5px;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  -o-border-radius: 0px;
  -ms-border-radius: 0px;
margin-top:0px;
}
.split {
  height: 50px;
  width: 60%;
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
     <p style="font-family: sans-serif;color: royalblue;font-size:xx-large;margin_left:5px;"><b>Manage Student Details</b></p>
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
 
    
      <div class="container">
    
    </div>
     <div class="row">
      <div class="col col-lg-2" style="border: none;background-color: #ebebe0;">
            
      <?php include('leftbar.php')?>

      <div class ="container" style="background-color: #eff5f5;margin-left: 0px; margin-right: 0px;height:auto;width:auto;border-radius:20px" >
         
        <form action="" method="POST">

                <input type="text" class= "form-control" name="id_number" value="<?php if (isset($id1)) {echo $id1;
                }?>" id="" placeholder="Identity Number" required  style="width:600px;margin-top: 20px;" >

                <input type="submit" name="student_update" class="btn btn-warning" style="margin-left:50px;margin-top:10px;margin-bottom:10px;" value="Search" >
               
                <input type="text" class= "form-control" name="first_name" id="" placeholder="first Name" value="<?php if (isset($firstname)) {echo $firstname;
                }?>"  style="width:600px;margin-top: 5px;" >
                <input type="text" class= "form-control" name="last_name" id="" placeholder="Last Name" value="<?php if (isset($lastname)) {echo $lastname;
                }?>" style="width:600px;margin-top: 5px;" >
                <input type="text" class= "form-control" name="address" id="" placeholder="Address" value="<?php if (isset($address)) {echo $address;
                }?>"   style="width:600px;margin-top: 5px;" > 
                <input type="text" class= "form-control" name="phone_number" id="" placeholder="Telephone Number" value="<?php if (isset($tel)) {echo $tel;
                }?>" style="width:600px;margin-top: 5px;" >

                <input type="email" class= "form-control" name="email" id="" placeholder="Valid Email of student"  value="<?php if (isset($mail)) {echo $mail;
                }?>"  style="width:600px;margin-top: 5px;" >


                <input type="text" class= "form-control" name="pn" id="" placeholder="Parent or Guardian Name" value="<?php if (isset($path)) {echo $path;
                }?>" style="width:600px;margin-top: 5px;" >
                <input type="text" class= "form-control" name="guardian_type" id="" placeholder="parent or Guardian Type" value="<?php if (isset($status)) {echo $status;
                }?>" style="width:600px;margin-top: 5px;" >
                <input type="text" class= "form-control" name="parent_tnumber" id="" placeholder="Telephone number" value="<?php if (isset($type)) {echo $type;
                }?>" style="width:600px;margin-top: 5px;" >
                <input type="email" class= "form-control" name="parent_email" id="" placeholder="Valid Email"   style="width:600px;margin-top: 5px;" >
                <input type="text" class= "form-control" name="siblings" id="" placeholder="Student's siblings" style="width:600px;margin-top: 5px;" >


                <input type="text" class= "form-control" name="bat" id="" placeholder="A/L year" style="width:600px;margin-top: 5px;" >
                <input type="text" class= "form-control" name="sub" id="" placeholder="subjects" style="width:600px;margin-top: 5px;" >

                <input type="submit" name="student" class="btn btn-primary" style="margin-left:150px;margin-top:10px;margin-bottom:10px;" value="Submit" >
                <input type="submit" name="student_up" class="btn btn-primary" style="margin-left:50px;margin-top:10px;margin-bottom:10px;background-color:green;" value="Update" >
               
                <input type="submit" name="delete" class="btn btn-danger" style="margin-left:50px;margin-top:10px;margin-bottom:10px;" value="Delete" >
             




        </form>
   

        
         
</body>
</html>