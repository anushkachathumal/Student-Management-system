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
	font-size:100%;
	font-family: Arial, Helvetica, sans-serif;  
}

form{
	height:50%;
	width:53%;
	margin-left:25%;
	margin-top:5%;
}
h3{
	
	text-align: justify;
	
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
	margin-top: 6%;
	
}
.name{
width:8%;

}
.input{
	width:20%;
}
.dot{
	width:1%;
	color:white;
}


</style>
	</head>
<body background="new/image/d.jpg">
	<?php include 'navigation.php'; ?>


		
<form method="POST" action="send_email.php">
<h3 style="color: white;margin-left: 140px;font-size: 35px;"><b>Sending reply for feedbacks</b></h3></br>

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
					<tr><td class="name"><label style="color: white;font-size:16px;">Email of the Receiver</label></td>
					<td class="dot">:</td>
					</td><td class= "input"><input type="text" class="form-control" name="email" value=" <?php echo $row1['email'] ?>" required/></td></tr>
<?php
}
}
?>
					<tr><td class="name"><label style="color: white;font-size: 16px;">Subject for the Email</label>
					<td class="dot">:</td>
					</td><td class= "input"><input type="text" class="form-control" name="subject" placeholder="Enter subject of the Mail" required="required"/></td></tr>

					<tr><td class="name"><label style="color: white;font-size: 16px;">Message</label>
					<td class="dot">:</td>
					</td><td class="input"><input type="text" class="form-control" name="message" style="height: 90px;" placeholder="Enter message.." required="required"/></td></tr>
					
			
				<tr><td></td><td></td><td><button name="send" class="btn btn-info" style="background-color: blue; float:right; margin-right:4%;"> Send</button></td></tr>

			</table>
			</form>
			<br />
			
</body>

</html>