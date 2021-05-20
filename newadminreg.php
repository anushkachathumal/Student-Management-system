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
    height:900px;
    border:solid;
    padding: 20px;
    margin: 10px;
  }
</style>
<body>

   <?php include('navigation.php')?>
   <br>
   <div class="frame">
    <h3 style="color: blue"><b> Add | Search | Update | Remove Student </b></h3>
    <br>
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" style="color: blue">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4" style="color: blue">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress" style="color: blue">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2" style="color: blue">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity" style="color: blue">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState" style="color: blue">State</label>
        <input type="text" class="form-control" id="inputZip">
     <!--  <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select> -->
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip" style="color: blue">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
 <!--  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button> -->
</form>
</div>
 </body>
 </html>