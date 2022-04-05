<?php
    if(isset($_GET["error"])){
        if($_GET["error"]=="emptyInput"){
            echo"<p>Username or password cannot be empty!</p>";
        }
        else if($_GET["error"]=="invalidInput"){
            echo"<p>Spaces are not allowed!</p>"
        }
        elseif($_GET["error"]=="stmtfailed"){
            echo"<p>Something went wrong, please try again!</p>"
        }
    }
?>