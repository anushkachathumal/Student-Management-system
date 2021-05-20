<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"wisdom");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add | teacher</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style>
		.container{
		width:600px;
		height:auto;
		
	}
	.btn{
		background-color: #4682B4;
	}
	
	body{
		background-size: cover;
	}
	td{
		text-align:left;
		font-size: 20px;
		font-family: 'Times New Roman', Times, serif;
		color: azure;
	}


	h3{
		float:center;
		font-family: 'Times New Roman', Times, serif;
		color: azure;
		margin-top: 30px;
	}
	.select{
	width:400px;
	}
	.new{
		float:right;
		border-radius: 50%;
		width: 80px;
		background-color:darksalmon;
		color: white;
		margin-right: 30px;
  
	}
</style>

</head>
<?php include 'navigation.php'; ?>
<body background = "new/image/d.jpg">
		

	<h3 align= "center" style="margin-bottom: 0px;" >Add Teacher</h3>
		<div class="container mt-5">
			<form action="MainAction.php" method="post" >
			<table class="table">
						<tbody>
							<tr>
								<td><label class=mt-2>Teacher ID</label></td><td><input type="text" class="form-control mt-2" name="teacher_id" required></td>
							</tr>
							<tr>
								<td><label class=mt-2>First Name</label></td><td><input type="text" class="form-control mt-2" name="first_name" required></td>
							</tr>
							<tr>
								<td><label class=mt-2>Last Name</label></td><td><input type="text" class="form-control mt-2" name="last_name" required></td>
							</tr>
							<tr>
							<td><label class=mt-2>Subject Name</label></td>
							<td>
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
								
								</select><button onclick="window.location.href = 'addSubject.php';" class="new">New</button>
							</td>
							
							</tr>
							
							<tr>
								<td><label class=mt-2>Address</label></td><td><textarea name="address" class="form-control mt-2" style="height:80px" required></textarea></td>
							</tr>
							<tr>
								<td><label class=mt-2>Telephone</label></td><td><input type="number" class="form-control mt-2" name="telephone"></td>
							</tr>
							<tr>
								<td><label class=mt-2>Email</label></td><td><input type="email" class="form-control mt-2" name="email"></td>
							</tr>

							<tr>
								<td></td><td style="text-align:right;"><button type="submit" name="saveTeacher" class="btn" style="background-color: blue;color: white;width: 200px;height: 40px;font-size: 18px;font-family:sans-serif;">Save</button></td>
							
						
							</tr>
							</tbody>
			</table>
		</form>
			<button type="button" style="margin-left: 360px;margin-top: 10px;width: 200px;height: 40px;background-color: blue;margin-bottom: 30px;" class="btn btn-primary"><a href="teacherDetails.php" style="color: black;font-size: 18px;color: white">Search Teacher</a></button></td>
    </div>
		</div>
		<br>
		<?php include 'footer.php'; ?>
	</body>
</head>
</html>