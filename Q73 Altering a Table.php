<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myda";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    // sql to create table
    $sql = "ALTER TABLE students
    ADD PRIMARY KEY (Stud_ID),
    ADD UNIQUE KEY Stud_Email (Stud_Email);";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table students altered successfully!";
    } else {
        echo "Error altering table: " . $conn->error;
    }
     echo "<br>This program is written by Diya Arora. <br>ERPID: 0221BCA059";
    $conn->close();
        
?>