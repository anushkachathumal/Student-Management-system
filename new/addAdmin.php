<!DOCTYPE html>
<html>
<head>
	<title>Add admin</title>
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

	<body background = "image/d.jpg">
	<h3 align= "center">Add admin</h3>
		<div class="container mt-6">
			<form action="MainAction.php" method="post">
			<table class="table">
						<tbody>

							<tr>
								<td><label class=mt-2>Admin ID</label></td><td><input type="text" class="form-control mt-2" name="admin_id"></td>
							</tr>
							<tr>
								<td><label class=mt-2>First Name</label></td><td><input type="text" class="form-control mt-2" name="first_name" size="43"></td>
							</tr>
							<tr>
								<td><label class=mt-2>Last Name</label></td><td><input type="text" class="form-control mt-2" name="last_name"></td>
							</tr>
							
							<tr>
								<td><label class=mt-2>Address</label></td><td><textarea name="address" class="form-control mt-2" style="height:80px" required></textarea></td>
							</tr>
							<tr>
								<td><label class=mt-2>Telephone</label></td><td><input type="phone" class="form-control mt-2" name="telephone"></td>
							</tr>
							<tr>
								<td><label class=mt-2>Email</label></td><td><input type="email" class="form-control mt-2" name="email"></td>
							</tr>

							<tr>
							<td></td><td style="text-align:right"><button type="submit" value="save" name="saveAdmin" class="btn" float="right"><b>Save</b></button></td>
							</tr>
							</tbody>
					</table>
				</form>
		</div>
	</body>
</head>
</html>