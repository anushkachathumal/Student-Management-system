<?php
include ("db.php");
$db= new db();
$con = $db->db();
$table="feedback";





function validate($inputdata) {
    htmlspecialchars($inputdata);
    trim($inputdata);
    stripslashes($inputdata);

    return $inputdata;
}

function insert($table,array $data) {
    global $con;
    $sql = "INSERT INTO $table(" . implode(" ,", array_keys($data)) . " )VALUES('" . implode("', '", array_values($data)) . "')";

    if (mysqli_query($con, $sql)) {
        
        echo '<script language="javascript">';
        echo 'alert("Your Feedback successfully sent.");';
        echo 'window.location.href="feedback.php";';
        echo '</script>';  
    } else {
        
        echo "<script>alert('Feedback not sent');</script>";
    }
 }


 
        

?>