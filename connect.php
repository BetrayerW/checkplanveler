<?php 
    session_start();

    $conn = mysqli_connect("us-cdbr-east-02.cleardb.com", "bf96ee9df22d09", "1073d9c7", "loginadminuser");

    if (!$conn) {
        die("Failed to connect to database " . mysqli_error($conn));
    }
