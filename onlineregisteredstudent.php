<?php

if (isset($_POST['search']))
 {
  $valueTosearch = $_POST['valueTosearch']; //search bar eke name eka
  $query = "SELECT * FROM `online_eenroll` WHERE CONCAT(`full_name`, `id_num`, `address`, `email`, `telephone`, `subject`)LIKE'%".$valueTosearch."%'";
  $search_result = filterTable($query);
}
else{

$query = "select * from online_eenroll";
$search_result = filterTable($query);

}
function filterTable($query){
  $connect = mysqli_connect("localhost","root","","wisdom");
  $filter_Result = mysqli_query($connect, $query);
  return $filter_Result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>online registered student | search</title>
   
 
</head>
<style>
  .frame{
    width:1500px;
    height:600px;
   border: solid;
    padding: 20px;
    margin: 10px;
  }
</style>
<body>

   <?php include('navigation.php')?>
   <br>
   <div class="frame">
    <h3 style="color: blue"><b> Online Registered Students </b></h3>
    <br>
<form action="" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6" >

     <?php while ($row = mysqli_fetch_assoc($search_result)){

      $full_name = $row["full_name"];
      $id_num = $row["id_num"];
      
      $address    = $row["address"];
      $email    = $row["email"];
      $telephone  =$row["telephone"];
      $subject      = $row["subject"];
    
    }

      ?>
      <label for="inputEmail4" style="color: blue">Student NIC Number</label>
      <input type="text" class="form-control"  placeholder="" style="width: 300px; display: inline-block;" name="valueTosearch" value="<?php if (isset($id_num)) {echo $id_num;
                }?>">
       <input type="submit" name="search" class="btn btn-warning" style="margin-left:50px;margin-top:10px;margin-bottom:10px;" value="Search Student" >
    </div>

    <div class="form-group col-md-6" >
      <label for="inputfn" style="color: blue">Full Name</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Full Name" style="width: 500px; display: inline-block;margin-right: 10px;" name="fullname" value="<?php if (isset($full_name)) {echo $full_name;
                }?>">

       

    </div>
  </div>

  <div class="form-group">
    <label for="inputAddress" style="color: blue">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main street" name="address" value="<?php if (isset($address)) {echo $address;
                }?>">
  </div>

  <div class="form-group">
    <label for="inputAddress2" style="color: blue">Email</label>
     <input type="text" class="form-control" id="inputCity" placeholder="vill@gmail.com" name="email" value="<?php if (isset($email)) {echo $email;
                }?>" >
    
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity" style="color: blue">Contact Number</label>
     
                <input type="Number" class="form-control" id="inputAddress2" placeholder="Contact Number" name="telephone" value="<?php if (isset($telephone)) {echo $telephone;
                }?>">
    </div>
</div>
<div class="form-row">
<div class="form-group col-md-2">
      <label for="inputZip" style="color: blue">Subjects</label>
      <input type="text" class="form-control" id="inputZip" name="subject" placeholder="Parent/Guardian" name="path" value="<?php if (isset($subject)) {echo $subject;
                }?>">
             <!--    <input type="submit" name="oe_delete" class="btn btn-danger" style="margin-left:0px;margin-top:10px;margin-bottom:10px;height=5px;" value="Delete Details"> -->
              
    </div>

<br>
     <?php include 'footer.php';
?>     </body>
     </html>