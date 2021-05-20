<?php

require_once 'dbconnection.php';

$studentName = $_POST['studentName'];
$studentId = $_POST['studentId'];
$month = $_POST['month'];
  

if(!$_POST['subject']){
    //echo "<script>alert('Please fill check box');</script>";
   // header( "Location: pay.php" );
}

 else {

//-----------subjec table------

$checkbox1=$_POST['subject'];
$chk="";  
$total_fee = 0;
foreach($checkbox1 as $chk1)  
   {  
      //$chk .= $chk1.","; 
    $query = "insert into subjects(studentId,subjectName) values ('$studentId','$chk1')";
    $in_ch=mysqli_query($conn,$query); 
    $total_fee = $total_fee+1000;
   }  
 
    if($in_ch==1)  
       {  
          //echo'<script>alert("Inserted Successfully")</script>';  
       }  
    else  
       {  
          echo'<script>alert("Failed To Insert")</script>';  
       } 

 
//-----------payments table------  
   
$sql = "INSERT INTO payments (studentName, studentId, month, total_fee)
VALUES ('$studentName', '$studentId', '$month', '$total_fee')";


if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    
    session_start(); 
    $_SESSION['studentName'] = $studentName;
    $_SESSION['month'] = $month;
    $_SESSION['totalFee'] = $total_fee;
    $_SESSION['subjects'] = $checkbox1;
    
    
     //header( "Location: payment_reciept.php" );
    header( "Location: payment.php" );
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


    
}

$conn->close();


?>

