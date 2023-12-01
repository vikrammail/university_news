<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('362058331149-4iju5otcap77r0lgrernf2l0pjcb5rsd.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('/signup.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>