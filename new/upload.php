<?php include 'filesLogic.php';
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"wisdom");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
 
    <title>Files Uploading</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        form {
          margin-top: 100px;
          width: 50%;
          /* margin: 30px auto; */
          padding: 30px; 
          margin-left: 250px;
          font-family: 'Times New Roman', Times, serif;
        }

        input {
          width: 100%;
          border: 1px solid #f1e1e1;
          display: block;
          padding: 5px 10px;
        }

        button {
          border: none;
          padding: 10px;
          border-radius: 5px;
          background-color: burlywood;
        }

        body{
          background-size: cover;
         
        }

        label,input{
          font-size:18px;
        }
        td{
          width:180px;
         height: 60px;
         
          
        }
        h1{
          font-weight: bolder;
        }

    </style>
  </head>
    <body background = "image/d.jpg">
    <?php include('navigation.php');?>


      <div class="container">
        <div class="row">
          <form action="upload.php" method="post" enctype="multipart/form-data">
            <h1 style="font-size: 45px;color: white;">Upload Notes</h1>
              <table>
                <tr><td><label class=mt-3 name="Subject" style="color: white;">Subject Name</label></td>
							
							    <td>	<select name="subject_name">
								  <?php	
									$res=mysqli_query($link,"select * from addsubject order by subject_name ");
									while($row=mysqli_fetch_array($res))
									{
										?>
								  <option><?php echo $row["subject_name"];?></option>
								  <?php
									}
							    ?></td></tr></br>

                <tr><td><label class=mt-3 style="color: white;">Description:</label></td>
                <td><input type="text" class="form-control mt-2" name="description" style="height: 50px;"></td></tr>
                <tr><td><label class=mt-2 style="color: white;">File Name:</label></td>
                <td><input type="text" class="form-control mt-2" name="f_name" ></td></tr>

                </table>
              
                <input type="file" name="myfile" style="width:250px"></br>
                <b><i><label class=mt-3 style="color:maroon;">* File size should be less than 2MB</label></i></b></br></br>
                <button type="submit" name="save" ><b>UPLOAD</b></button>


          
        </form>
      </div>
    </div>
    <?php include('footer.php');?>
  </body>
</html>