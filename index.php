<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">

        <title>Insert something here</title>


        <div id="navbar">
            <a href="login.php" class="navlink">login</a>
            <a href="logout.php">logout</a>
        </div>

        <div>
        <form action="upload.php" method="post" enctype="multipart/form-data">
        <label>Select Image File:</label>
        <input type="file" name="image">
         <input type="submit" name="submit" value="Upload">
</form>
        </div>
    </head>



    <body>
    <?php
        if(isset($_SESSION["adminID"])){
        echo"<p> HELLO USER ID ". $_SESSION["adminID"] . "</p>";
        }else{
            echo"ITDIDNOTWORK";
        }
        ?>
    </body>
</html>