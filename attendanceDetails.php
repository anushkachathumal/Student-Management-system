<?php

include('MainAction.php');

$idattendance=$_POST["edate"];
$v=$ob->search_value_by("attendance","student_id",$idattendance);


foreach($v as $key=> $value){
        $id1= $value["attendance_id"];
        $student_id= $value["student_id"];
        $first_name= $value["first_name"];
        $last_name= $value["last_name"];
        $date_time= $value["date_time"];
        
      }  
    ?>

<!DOCTYPE html>
<html>
<head>
  <title>Attendance Details</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body background="new/image/d.jpg">
	<?php include('navigation.php');?>

  <form action="" method="post">
        <input type="text" placeholder="Enter Date" name="edate" style="margin-left: 630px;margin-top: 90px;border-radius: 5px;width: 330px;"><br>
        <input type="submit" value="Search Date" style="background-color: yellow;color: black;font-size: 20px;border-radius: 5px;width:170px;height: 45px;margin-left: 720px;margin-top: 10px;" ><b></b>


        <input type="text" placeholder="Enter Date" name="edate" style="margin-left: 630px;margin-top: 90px;border-radius: 5px;width: 330px;" value="<?php if (isset($id1)) {echo $id1;
                }?>"><br>

        <input type="text" placeholder="Enter Date" name="edate" style="margin-left: 630px;margin-top: 90px;border-radius: 5px;width: 330px;" value="<?php if (isset($student_id)) {echo $student_id;
                }?>"><br>


        <input type="text" placeholder="Enter Date" name="edate" style="margin-left: 630px;margin-top: 90px;border-radius: 5px;width: 330px;" value="<?php if (isset($first_name)) {echo $first_name;
                }?>"><br>


        <input type="text" placeholder="Enter Date" name="edate" style="margin-left: 630px;margin-top: 90px;border-radius: 5px;width: 330px;" value="<?php if (isset($last_name)) {echo $last_name;
                }?>"><br>


        <input type="text" placeholder="Enter Date" name="edate" style="margin-left: 630px;margin-top: 90px;border-radius: 5px;width: 330px;" value="<?php if (isset($date_time)) {echo $date_time;
                }?>"><br>
    </form>











	
</body>
</html>