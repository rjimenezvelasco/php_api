<?php
 // require_once 'vendor/autoload.php';
  require_once '../vendor/autoload.php';
  $clientID = '';
  $clientSecret = '';
  $redirectUri = 'http://localhost:8081/api/loginGoogle-master/perfil.php';

  // create Client Request to access Google API
  $client = new Google_Client();
  $client->setClientId($clientID);
  $client->setClientSecret($clientSecret);
  $client->setRedirectUri($redirectUri);
  $client->addScope("email");
  $client->addScope("profile");

  

 
?>