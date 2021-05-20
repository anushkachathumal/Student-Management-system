<?php

if (isset($_POST['search']))
 {
 	$valueTosearch = $_POST['valueTosearch']; //search bar eke name eka
 	$query = "SELECT * FROM `student` WHERE CONCAT(`student_id`, `first_name`, `last_name`, `address`, `telephone`, `email`)LIKE'%".$valueTosearch."%'";
 	$search_result = filterTable($query);
}
else{

$query = "select * from student";
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
    <title>Search | Update Student</title>
   
 
</head>
<style>
  .frame{
    width:1500px;
    height:600px;
    border:solid;
    padding: 20px;
    margin: 10px;
  }
</style>
<body>

   <?php include('navigation.php')?>
   <br>
   <div class="frame">
    <h3 style="color: blue"><b> Search Student </b></h3>
    <br>
<form action="" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6" >

     <?php while ($row = mysqli_fetch_assoc($search_result)){

     	$student_id	= $row["student_id"];
     	$first_name	= $row["first_name"];
     	$last_name	= $row["last_name"];
     	$address    = $row["address"];
     	$telephone	=$row["telephone"];
     	$email      = $row["email"];
		
		}

     	?>

      <label for="inputEmail4" style="color: blue">Student NIC Number</label>

      <input type="text" class="form-control" id="inputEmail4" placeholder="" style="width: 300px; display: inline-block;" name="valueTosearch" value="<?php if (isset($student_id)) {echo $student_id;
                }?>">
       <input type="submit" name="search" class="btn btn-warning" style="margin-left:50px;margin-top:10px;margin-bottom:10px;" value="Search Student">
    </div>

    

    <div class="form-group col-md-6" >
      <label for="inputfn" style="color: blue">First Name</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="First Name" style="width: 200px; display: inline-block;margin-right: 10px;" name="first_name" value="<?php if (isset($first_name)) {echo $first_name;
                }?>">

       <p style="color:blue;margin: 0px;display: inline-block;"> Last Name </p> </colgroup><input type="text" class="form-control" id="inputPassword4" placeholder="First Name" style="width: 200px; display: inline-block;margin-left: 10px;" name="last_name" value="<?php if (isset($last_name)) {echo $last_name;
                }?>">

    </div>
  </div>

  <div class="form-group">
    <label for="inputAddress" style="color: blue">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main street" name="address" value="<?php if (isset($address)) {echo $address;
                }?>">
  </div>

  <div class="form-group">
    <label for="inputAddress2" style="color: blue">Contact Number</label>
    <input type="Number" class="form-control" id="inputAddress2" placeholder="Contact Number" name="telephone" value="<?php if (isset($telephone)) {echo $telephone;
                }?>">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity" style="color: blue">Valid Email</label>
      <input type="text" class="form-control" id="inputCity" placeholder="vill@gmail.com" name="email" value="<?php if (isset($email)) {echo $email;
                }?>" >
    </div>
</div>

  <br>
   <!--   <input type="submit" name="s_update" class="btn btn-primary" style="margin-left:50px;margin-top:10px;margin-bottom:10px;background-color:green;color: black;" value="Update Student Details" >
                -->
    

</form>
</div>
 </body>
 </html>

 
 	<!-- $connection = mysqli_connect("localhost","root","");
 	$db = mysqli_select_db($connection,'wisdom');

 	if (isset($_POST['s_update'])) {
 		$student_id	= $_POST["valueTosearch"];

 		$query1 = "UPDATE 'student' SET first_name='$_POST[first_name]',last_name='$_POST[last_name]',address='$_POST[address]',telephone='$_POST[telephone]',email='$_POST[email]' WHERE student_id='$_POST[valueTosearch]'";
 		$query_run = mysqli_query($connection,$query1);

 		if($query_run)
 		{
 			echo '<script type='text/javascript'> alert("DATA UPDATED")</script>';
 		}else{
 			echo '<script type='text/javascript'> alert("DATA NOT UPDATED")</script>';
 		}

     	
 	} -->
 