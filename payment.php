
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"wisdom");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 0px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 6px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}



a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
    <?php include('navigation.php');?>
    <br>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="MainAction.php" method="post">
     
        <div class="row">
          <div class="col-50">
            <h3>Student Payment</h3>
			<label for="sname"><i class="fa fa-address-book"></i> Student Name</label>
            <input type="text" id="sname" name="firstname" placeholder="Enter your Name" required>
			
           <label for="sid"><i class="fa fa-id-badge"></i> Student ID</label>
            <input type="text" id="sid" name="stId" placeholder="Enter your Student ID Number" required>

            <label for="month"><i class="fa fa-calendar"></i> Month</label>
            <select class="form-control" name="month" required>
			<option>Select your Month</option>
			<option>January</option>
			<option>February</option>
			<option>March</option>
			<option>April</option>
			<option>May</option>
			<option>June</option>
			<option>July</option>
			<option>August</option>
			<option>September</option>
			<option>Octomber</option>
			<option>November</option>
			<option>Desember</option>
			</select>
           
           <br> <label>
            <label for="amount"><i class="fa fa-money"></i> Amount</label>
            <input type="text" id="mount" name="fees" placeholder="Enter Amount" required>
			
           
        
			 <label for="amount"><i class="fa fa-square"></i> Subject</label>
			
        <select name="subject_name">
                <?php 
                  $res=mysqli_query($link,"select * from addsubject order by subject_name ");
                  while($row=mysqli_fetch_array($res))
                  {
                    ?>
                    <option><?php echo $row["subject_name"];?></option>
                    <?php
                  }
              ?>
            </select>
        

            
          </div><br>

          
          
        </div>
        <input type="reset" value="Clear Details" class="btn btn-warning"><br><br>
        <input type="submit" value="SUBMIT" name="paymentb" class="btn btn-primary btn-block">
      </form>
    </div>
  </div>
 
</div>

	
</body>
</html>
