<?php

$username = "";
$errors =array();
$_SESSION['success'] = "";

$db = mysqli_connect('localhost', 'root', '', 'wisdom');

if (isset($_POST['login_user'])) {

	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);


	if (empty($username)) {
		array_push($errors, "Username is required");
	}

	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0){

		$password = md5("password");

		$query = "SELECT * FROM login WHERE username='$username' AND password='password'";

		$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {

				$_SESSION['username'] = $username;

				
				header('location: home.php');
			}else{
				array_push($errors, "Username Or password incorrect");
			}
	}

}




























?>