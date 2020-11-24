<?php 

    $conn = mysqli_connect("us-cdbr-east-02.cleardb.com", "bf96ee9df22d09", "8566afcc0875a75", "heroku_4ee1ffe0977b486");

    if (!$conn) {
        die("Failed to connect to database " . mysqli_error($conn));
    }
    date_default_timezone_set('Asia/Karachi');
$error="";
//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('419893699066-vtqovr9g5jhq3ms524kodl11frm4rleq.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('bihh2fay8_n0AxlWM6C088TP');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/tutorial/php-login-using-google-demo/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();
