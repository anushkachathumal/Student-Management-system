<?php session_start();
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  body{
	background-size: cover;
    font-family: 'Times New Roman', Times, serif;
	font-size:100%;  
	
  }

form{
	height:50%;
	width:40%;
	margin-left:30%;
	margin-top:15%;
}
h3{
	text-align:center;
	font-weight: bolder;
	
}
button{
	margin-left:3%;
	margin-top:5%;
	margin-bottom:5%;
}
label{
	margin-left:3%;
	font-size:100%;
	font-weight: bold;
	margin-top: 16%;
	
}
.name{
width:4%;
}
.input{
	width:15%;
}


</style>
	</head>
<body background="image/n.jpg">


		
<form method="POST" action="send_email.php">
<h3><i>Sending reply for feedbacks...</i></h3></br>

<table>

<?php 
$con =mysqli_connect("localhost","root","","wisdom");
mysqli_select_db($con ," wisdom");

if(isset($_GET['email_id'])){
	$email_id= $_GET=$_GET['email_id'];
	$query1 =("SELECT email FROM feedback WHERE feedback_id=$email_id");
	$deletecus= mysqli_query($con ,$query1);

	while($row1 =mysqli_fetch_array($deletecus)){
?>
					<tr><td class="name"><label>Email</label></td>
					</td><td class= "input"><input type="text" class="form-control" name="email" value=" <?php echo $row1['email'] ?>" required/></td></tr>
<?php
}
}
?>
					<tr><td class="name"><label>Subject</label>
					</td><td class= "input"><input type="text" class="form-control" name="subject" placeholder="Enter subject.." required="required"/></td></tr>

					<tr><td class="name"><label>Message</label>
					</td><td class="input"><input type="text" class="form-control" name="message" placeholder="Enter message.." required="required"/></td></tr>
					
			
				<tr><td></td><td><button name="send" class="btn btn-info"> Send</button></td></tr>

			</table>
			</form>
			<br />
			
</body>

</html>