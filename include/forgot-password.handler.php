<?php
if(isset($_POST["submit"] ) && $_POST["email"]){
    require_once 'db_handler.php';
    require_once 'generalErrorHandling.php';

    $email=$_POST["email"];
    $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    $email = filter_var($email,FILTER_VALIDATE_EMAIL);

    if(fetchUIDPass($conn,$email) === false){
        //insert error handling for email not found in db

        exit();
    }
    $token = bin2hex(random_bytes(50));

    $sql_insert = "INSERT INTO password_reset(email,token) VALUES ('$email','$token')";
    $result = mysqli_query($conn,$sql_insert);

    $receipent = $email;
    require_once 'email_handler.php';
    sendMail($token);
    header("location: ../pending-email.php?email=".$email."");

    //mail
    

    }
    else{
    header("location: ../register.php");

    exit();
    }