<?php

include 'function.php';

$table="feedback";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['name'])) {
        $err = "Name is reqired";

    } else {
        $name = validate($_POST['name']);
    }

    if (empty($_POST['email'])) {
        $err = "Emal is reqired";
        echo $err;
    } else {
        $email = validate($_POST['email']);
    }

    if (empty($_POST['description'])) {
        $err = "Description number is reqired";
        echo $err;
    } else {
        $description = validate($_POST['description']);
    }
}

$data = array(
    "name" => $name,
    "email" => $email,
    "description" => $description,
 
);

insert($table,$data);

?> 