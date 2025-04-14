<?php

    // Starting session
    session_start();
     
    // Removing session variable
    if(isset($_SESSION["lastname"])){
        unset($_SESSION["lastname"]);
    }
    else{
        echo "Session already destroyed.";
    }
    echo "<br>This program is written by Diya Arora<br>ERPID-0221BCA059";
?>