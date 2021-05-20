<?php
//include_once("includes/config.php");

session_start(); 

unset($_SESSION['username']);
session_destroy(); // destroy session
header("location:../index.php"); 
?>

