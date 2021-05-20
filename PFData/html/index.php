<?php
  //include php Conn.php file
  include_once("Conn.php");
  $fetchdata=new DB_con();
  $a = NULL;
?>


<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body { 
    background-image: url('img/frontBack.jpg');
  }
</style> 
</head>

<body>

<!--popup window(start)-->
<div>
<div class="modal-dialog" role="document" style="background: rgba(171, 205, 239, 0.3);"} >
    <div class="modal-content" style="background: rgba(171, 205, 239, 0.3);"}>
      <div class="modal-header" style="background: rgba(171, 205, 239, 0.3);"}>
        <h5 class="modal-title text-white" id="exampleModalLabel">Payments!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="payment.php" method="POST" id="popupform">
      <div class="modal-body">
        <input style="background: rgba(171, 205, 239, 0.3);"} class = "text-white" type="text" id="retriveId" name="retriveId" class="form-control" placeholder="Student Id" aria-label="Student Id" aria-describedby="basic-addon2" required="retriveId">
      </div>
      <div class="modal-footer">
        <button style="background: rgba(171, 205, 239, 0.3);"} type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary" id="submit">Retrive Payments</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!--popup window(end)-->

<!--payment container-->
<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous"/>
<script src="script/jquery-3.4.1.js" crossorigin="anonymous"></script>
<script src="script/popper.min.js"  crossorigin="anonymous"></script>
<script src="script/bootstrap.min.js" crossorigin="anonymous"></script>
<script>

</script>
</html>
