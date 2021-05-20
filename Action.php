
<?php


$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"wisdom");


include('MainAction.php');


	$a=$_GET["searchId"];
	$v=$ob->search_Value_By("student","student_id",$a);

	foreach ($v as $key => $value) {
        $id=$value["student_id"];
        $fn= $value["first_name"];
       $ln= $value["last_name"];
       $tp=$value["type"];
    }



?>



<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="first_name" value="
<?php if(isset($fn)){
    echo $fn;
    }?>" 
    placeholder="Name"><br/>
<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="last_name" value="
<?php
 if(isset($ln)){
     echo $ln;
     }?>" 
     placeholder="Subject"><br/>

      <select name="Subject">
                <?php 
                  $res=mysqli_query($link,"select * from addsubject order by subject_name ");
                  while($row=mysqli_fetch_array($res))
                  {
                    ?>
                    <option style="width: 10px;margin-bottom: 20px;"><?php echo $row["subject_name"];?></option>
                    <?php
                  }
              ?>
            </select><br>
<?php

?>

