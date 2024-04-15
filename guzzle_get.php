<?php
require 'vendor/autoload';

// initialise une instance
$client = new \GuzzleHttp\Client();

// get requets
$response = $client-> get('https://example.com');

// reponse du serveur
$responseContents = $response -> getBody();
