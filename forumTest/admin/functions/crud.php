<?php
include "functions.php";

$action = $_POST['action'];

switch($action){
	case "deleteuser":
	$user_Id= $_POST['student_id'];
	deleteuser($user_Id);
	break;
}




?>