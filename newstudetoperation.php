

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
    height:650px;
    border:solid;
    padding: 20px;
    margin: 10px;
  }
</style>
<body>

   <?php include('navigation.php')?>
   <br>
   <div class="frame">
    <h3 style="color: blue"><b>  Update | Student </b></h3>
    <br>
<form action="MainAction.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6" >
      <label for="inputEmail4" style="color: blue">Student NIC Number</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" style="width: 300px; display: inline-block;" name="id_number" >
     
    </div>

    <div class="form-group col-md-6" >
      <label for="inputfn" style="color: blue">First Name</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="First Name" style="width: 200px; display: inline-block;margin-right: 10px;" name="first_name" >

       <p style="color:blue;margin: 0px;display: inline-block;"> Last Name </p> </colgroup><input type="text" class="form-control" id="inputPassword4" placeholder="First Name" style="width: 200px; display: inline-block;margin-left: 10px;" name="last_name" >

    </div>
  </div>

  <div class="form-group">
    <label for="inputAddress" style="color: blue">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main street" name="address" >
  </div>

  <div class="form-group">
    <label for="inputAddress2" style="color: blue">Contact Number</label>
    <input type="Number" class="form-control" id="inputAddress2" placeholder="Contact Number" name="telephone" >
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity" style="color: blue">Valid Email</label>
      <input type="text" class="form-control" id="inputCity" placeholder="vill@gmail.com" name="email" >
    </div>
</div>

  <br>
     <input type="submit" name="s_update" class="btn btn-primary" style="margin-left:50px;margin-top:10px;margin-bottom:10px;background-color:green;" value="Update Student Details" >
               
    

</form>
</div>
 </body>
 </html>