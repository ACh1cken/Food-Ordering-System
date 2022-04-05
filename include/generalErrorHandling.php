

<?php

function emptyInput($username,$password){

    if (empty($username)||empty($password)) {
        return true;
    }else{
        return false;
    }
}

//checks if the inserted input is an email or not
function invalidInput($username){
    $pattern = "/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,})$/i";
    if(!preg_match($pattern,$username)){
        return true;
    }else{
        return false;
    }
}

function fetchUIDPass($conn,$username){
    $sql = "SELECT * FROM admins WHERE adminUID = ? ;";
    $stmt = mysqli_stmt_init($conn);
    
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../login.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"s",$username);
    $stmt->execute();
    $result = mysqli_stmt_get_result($stmt);
    printf("%d row affected.\n", mysqli_stmt_affected_rows($stmt));
    if($row = mysqli_fetch_assoc($result)){

        return $row;
    }else{

        return false;
    }
    mysqli_stmt_close($stmt);
}

function loginUser($conn,$username,$password){
    $UIDarray=fetchUIDPass($conn,$username);
    if($UIDarray === false){
        header("location: ../login.php?error=login");
        exit();
    }
    $UPass = $UIDarray["adminPass"];
    print_r($UIDarray);
    if($password == $UPass){
        session_start();
        $_SESSION["adminID"] = $UIDarray["adminID"];
        header("location: ../index.php");
        exit();
    }else{
        header("location: ../login.php?error=InvalidPassword");
        exit();

    }
}

function registerUser($conn,$username,$password){
    $UIDarray = fetchUIDPass($conn,$username);
    if(!empty($UIDarray)){
        header("location: ../login.php?error=useralreadyexist");
        exit();
    }

    $sql = "INSERT INTO admins (adminUID,adminPass) values (?,?) ;";
    $stmt = mysqli_stmt_init($conn);
    
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../login.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"ss",$username,$password);
    $stmt->execute();
    mysqli_stmt_close($stmt);
    header("location: ../index.php");
    exit();
}