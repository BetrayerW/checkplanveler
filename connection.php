 <?php 

    $conn = mysqli_connect("us-cdbr-east-02.cleardb.com", "bf96ee9df22d09", "8566afcc0875a75", "heroku_4ee1ffe0977b486");

    if (!$conn) {
        die("Failed to connec to databse " . mysqli_error($conn));
    }

?>