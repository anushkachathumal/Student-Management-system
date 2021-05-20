<?php

$a =$_POST["user_id"];



$con=mysqli_connect("localhost","root","","wisdom");


$res =  mysqli_query($con,"select * from student where student_id='$a'");
$b=false;
while ($row=mysqli_fetch_array($res)){
    $b=true;
    $status=$row["status"];
    

if($b){
    if ($status=="pending") {
        header("location:initial.html");
    }else{
        
      
        echo "
        <script>
        alert('error');
        window.location='log.php';
        </script>
        ";
    }
    
}else{
    
}


}



?>

