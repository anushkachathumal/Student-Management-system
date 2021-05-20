
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>admin reg</title>
   
 
</head>
<style>
  .frame{
    width:1500px;
    height:770px;
    border:solid;
    padding: 20px;
    margin: 10px;
  }
</style>
<body>

   <?php include('navigation.php')?>
   <br>
   <div class="frame">
    <h3 style="color: blue"><b> Add | Student </b></h3>
    <br>
<form action="MainAction.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6" >
      <label for="inputEmail4" style="color: blue">Student NIC Number</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" style="width: 300px; display: inline-block;" name="id_number">
    </div>
    <div class="form-group col-md-6" >
      <label for="inputfn" style="color: blue">First Name</label>
      <input type="text" name="first_name" class="form-control" id="inputPassword4" placeholder="First Name" style="width: 200px; display: inline-block;margin-right: 10px;">

       <p style="color:blue;margin: 0px;display: inline-block;"> Last Name </p> </colgroup><input type="text" class="form-control" id="inputPassword4" placeholder="Last Name" name="last_name" style="width: 200px; display: inline-block;margin-left: 10px;">
   
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress" style="color: blue">Address</label>
    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main street">
  </div>
 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity"  style="color: blue">Valid Email</label>
      <input type="text" name="email" class="form-control" id="inputCity" placeholder="vill@gmail.com">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState" style="color: blue">Guardian Name</label>
        <input type="text" name="gname" class="form-control" id="inputZip">
     <!--  <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select> -->
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip" style="color: blue">Parent or Guardian</label>
      <input type="text" name="pg" class="form-control" id="inputZip" placeholder="Parent/Guardian">
    </div>
   
    </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity"  style="color: blue">User Name</label>
      <input type="text" name="username" class="form-control" id="inputCity" placeholder="use student email as a user name">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState" style="color: blue">Password</label>
        <input type="password" name="password" class="form-control" id="inputZip">
     <!--  <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select> -->
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip" style="color: blue">User Type</label>
      <input type="text" name="usertype" class="form-control" id="inputZip" placeholder="Parent/Guardian">
    </div>
   
    </div>

 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity" style="color: blue">Contact Number Of Guardian</label>
      <input type="Number" name="gtel" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState" style="color: blue">Email Of Guardian</label>
        <input type="text" name="gemail" class="form-control" id="inputZip">
     <!--  <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select> -->
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity" style="color: blue">If You Have Any Sibling Type Their Age</label>
      <input type="text" name="sibling" class="form-control" id="inputCity" >
    </div>
    <div class="form-group col-md-4">
      <label for="inputState" style="color: blue">A/L Year</label>
        <input type="text" name="year" class="form-control" id="inputZip">
     
    </div>
     <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity" style="color: blue;width: 500px;margin-bottom: 0px;">Subjects that you hope to do</label>
      <input type="text" name="subjects" class="form-control" id="inputCity" >
    </div>
  </div>

    
</div>
  <br style="margin-bottom: 0px;">
    <input type="submit" name="studentr"class="btn btn-primary" style="margin-top:0px;margin-bottom:10px;" value="Save Student" >
</form>
</div>
 </body>
 </html>