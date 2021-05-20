<?php


include 'db.php';


if($_POST['edate']) 
    $res = mysql_query( "SELECT * FROM attendance WHERE date_time='".$_POST['edate']."'" );


    ?>