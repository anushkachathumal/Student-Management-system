<!DOCTYPE html>
<html>
<head>
	<title>Add subject</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style>
	.container{
		width:600px;
		
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
</style>

</head>

	<body background = "new/image/d.jpg">
		<?php include 'navigation.php'; ?>
	<h3 align= "center" class="mt-5">Add subject</h3>
	<div class="container mt-3">
		<form action="MainAction.php" method="post">
					<table class="table">
						<tbody>
					
							<tr>
								<td><label class=mt-2>Subject code</label></td><td><input type="text" class="form-control mt-2" name="subject_code" required></td>
							</tr>
							
							<tr>
								<td><label class=mt-2>Subject Name</label></td><td><input type="text" class="form-control mt-2" name="subject_name" required></td>
							</tr>
							<tr>
								<td><label class=mt-2>Description</label></td><td><textarea name="details" class="form-control mt-2" style="height:80px" required></textarea></td>
							</tr>
							<tr>
								<td><label class=mt-2>Date</label></td><td><input type="text" class="form-control mt-2" name="date" required></td>
							</tr>

							<tr>
								<td></td><td style="text-align:right"><button onclick="window.location.href = 'addTeacher.php';" type="submit" value="save" style="background-color: blue;color: white;" name="saveSubject" class="btn"><b>Save</b></button></td>
							</tr>
							

							</tbody>
					</table>
				</form>
			</div>
			<?php include 'footer.php'; ?>
	</body>
</html>