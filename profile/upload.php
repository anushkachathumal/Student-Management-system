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
          width: 80%;
          margin-top: 6%;
          padding: 17px;
          margin-left: 9%;
          background: rgba(124, 148, 170, 0.3);
          
        }

        input { 
          border: 1px solid grey;
          display: block;
          padding: 5px 10px;  
        }

        button {
          border: none;
          padding: 15px;
          background-color: blue;
          margin-left: 80%;
          margin-top: 3%;
          font-size: 90%;
          color: white;
        
        }

        body{
          background-size: cover;
          font-family: Arial, Helvetica, sans-serif; 
        }

        label{
        color: white;
        }

        h1{
          font-size: 45px;
          color: white;
          margin-left:35%;
        }
    </style>

  </head>
    <body background = "new/image/d.jpg">
    <?php include('navigation.php');?>

      <div class="container">
        <div class="row ">
          <h1>Upload Notes</h1>
          <form action="upload.php" method="post" enctype="multipart/form-data">
            
              <table>
               <tr><th><label name="Subject">Select Subject</label></th>
                <th><label>Description</label></th>
                <th><label>File Name</label></th>
                <th></th></tr>
                

							<tr>
							    <td>	<select name="subject_name" style="width: 210px; height: 57px; font-size: 19px">
								  <?php	
									$res=mysqli_query($link,"select * from addsubject order by subject_name ");
									while($row=mysqli_fetch_array($res))
									{
										?>
								  <option><?php echo $row["subject_name"];?></option>
								  <?php
									}
							    ?></td>

                
                <td><input type="text" class="form-control " name="description"  style="width: 300px; height: 45px;" required></td>
                <td><input type="text" class="form-control" name="f_name" style="width: 250px; height: 45px;"  required></td>
                <td></td>
                <td><input type="file" name="myfile" style="width:240px; background-color: darkgrey;"required></td>
              </tr>
            </table>  
          <button type="submit" name="save" style="width: 170px;" ><b>Upload</b></button>
          <button type="button" style="width: 170px;"><a href="downloads.php" style="color: black;font-size: 18px;color: white"><b>Download List<b></button>
        </form>
      </div>
    </div>
    <?php include('footer.php');?>
  </body>
</html>