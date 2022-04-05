<?php

if(isset($_POST["login"])){
    $name=$_POST["email"];


    require_once 'db_handler.php';
    require_once 'generalErrorHandling.php';

    if(invalidInput($name) != false){
        header("location: ../login.php?error=invalidEmail");
        exit();
    }

    if (emptyInput($name,$password) != false) {
        header("location: ../login.php?error=emptyInput");
        exit();
    }
    
    loginUser($conn,$name,$password);

}else {
    header("location: ../login.php");
    //loginfailed
}
