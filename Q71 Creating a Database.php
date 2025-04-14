<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    // Create database
    $sql = "CREATE DATABASE myda";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully!";
    } else {
        echo "Error creating database: " . $conn->error;
    }
    echo "<br>This program is written by Diya Arora. <br>ERPID: 0221BCA059";
    
    $conn->close();
    
?>