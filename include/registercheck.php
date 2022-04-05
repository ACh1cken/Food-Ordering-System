<?php

if(isset($_POST["register"])){
$name=$_POST["email"];
$password=$_POST["password"];
$password_confirm=$_POST["password_confirm"];
require_once 'db_handler.php';
require_once 'generalErrorHandling.php';

if (emptyInput($name,$password) != false) {
    header("location: ../register.php?error=emptyInput");
    exit();
}

registerUser($conn,$name,$password);
}
else{
header("location: ../register.php");
//register failed
exit();
}