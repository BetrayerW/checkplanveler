<?php

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
$google_client->setRedirectUri('https://checkplanveler.herokuapp.com/Login.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>

