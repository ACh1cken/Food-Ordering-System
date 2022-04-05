


<html>
    <head>
    <link rel="stylesheet" href="style.css">

        <title></title>
    </head>

    <body>
        <form action="./include/adminlogincheck.php" method="post">
            <input type="text" name="name" placeholder="Enter your username.">
            <input type="password" name="pass" placeholder="Enter your password.">  
            <button type="submit" name="login">Login</button>
            <button type="submit" name="register">Reigster</button>
        </form>
    </body>
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"]=="emptyInput"){
            echo"<p>Username or password cannot be empty!</p>";
        }
        else if($_GET["error"]=="invalidInput"){
            echo"<p>Spaces are not allowed!</p>";
        }
        elseif($_GET["error"]=="stmtfailed"){
            echo"<p>Something went wrong, please try again!</p>";
        }
        else if($_GET["error"]=="InvalidPassword"){
            echo"<p>Invalid Password!</p>";
        }
        elseif($_GET["error"]=="login"){
            echo"<p>Something went wrong, please try again!</p>";
        }
    }
?>
</html>
