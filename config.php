<?php

require_once "google-api/vendor/autoload.php";
$gClient = new Google_Client();

//your googleSignIn clientID
$gClient->setClientId("967563540608-mv3gbnkhbclim2ddtbavap63fbtmhgli.apps.googleusercontent.com");

//your googleSignIn clientSecret
$gClient->setClientSecret("tKibpaUtzFEslnDxRoHrJF82");

$gClient->setApplicationName("VHealth");
$gClient->setRedirectUri("http://localhost/Vhealth/controller.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

// login URL
$login_url = $gClient->createAuthUrl();

?>