<?php 

    $conn = mysqli_connect("us-cdbr-east-02.cleardb.com", "bf96ee9df22d09", "8566afcc0875a75", "heroku_4ee1ffe0977b486");

    if (!$conn) {
        die("Failed to connect to database " . mysqli_error($conn));
    }
    date_default_timezone_set('Asia/Karachi');
$error="";
?>
