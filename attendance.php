<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="wisdom/vendor/bootstrap/css/bootstrap.min.css"> 
    <link href="wisdom/css-buttons-master/styles/bootstrap.min.css" rel="stylesheet">

    <link href="wisdom/css-buttons-master/styles" rel="stylesheet">
    <link rel="stylesheet" href="wisdom/bootstrap-3.4.1/dist/css/bootstrap.min.css">
  <script src="wisdom/vendor/jquery/jquery.min.js"></script>
  <script src="wisdom/js/bootstrap.min.js"></script>

    <title>Attendance Marking</title>
    <style>

.main {
  height: 60px;
  width: 1550px;
  background-color: silver;
}
.container{
 
  height: 650px;
  background: #fff;
  
  border-radius: 5px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  -o-border-radius: 10px;
  -ms-border-radius: 10px;
  border:solid;
  border-color: royalblue;
  margin-top: 20px;
  width: 350px;
  padding: 10px;
  right:0px;

}
.submit {
  width: 150px;
  background: #0000ff;
  color: #fff;
  padding: 16px 17px;
  margin-left: 69px;
  margin-top: 0px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -ms-border-radius: 5px;
  cursor: pointer;
  box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
  -moz-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
  -webkit-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
  -o-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
  -ms-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
   }
  .submit:hover {
    background: #3a518d; 
	}
  .split {
  height: 50px;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;

 margin-left:10px;
}

.left {
  left: 0;
  background-color:#f2ffff;
}


</style>
</head>
<body background="new/image/d.jpg">
  

<script>
	function fun(){
    
		
		var v=document.getElementById("student_id").value;

		var xhr=new XMLHttpRequest();
	xhr.onreadystatechange=function(){
if(xhr.readyState==4){
 
       document.getElementById("showcase").innerHTML=xhr.responseText;
       document.getElementById("temp").remove();
	   //document.getElementById("btnList").remove();
}
		}
	
        xhr.open("GET","Action.php?searchId="+v,true);
	

		xhr.send(null);
		return false;
		
		
	}
	
	
  </script>

     <?php include('navigation.php');?>

<div class="container" style="right:0px;">
    <div class="card" style="width: 30rem;margin-top: 25px;margin-left: 13px;margin-bottom:25px;">
        <img class="card-img-top" src="images/download.jpg" alt="Card image cap">
        <div class="card-body">
          <form method="POST" action="MainAction.php">
            <input type="text" class="form-control"  aria-describedby="emailHelp" name="student_id" id="student_id" placeholder="Student ID" onkeyup="fun();"><br/>
           
            <span id="showcase"></span>
          <span id="temp">
          

</span>
<input type="submit" value="Mark"   name="attend_save" class="submit" style="margin-top: 20px;">
       <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--->   
</form>
        </div>
    <!--<ul class="list-group list-group-flush">
          <li class="list-group-item">Cras justo odio</li>
          <li class="list-group-item">Dapibus ac facilisis in</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>-->    
        
        <!--<input type="submit" name="login_btn" id="submit" class="submit" value="Attended" />-->
        <div class="card-body">
           
          <a href="#" class="card-link" style="margin-right: 65px;"></a>
          <a href="#" class="card-link"></a>
        </div>
      </div> 

    </div>
<?php include('footer.php');?>
</body>
</html>