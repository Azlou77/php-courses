<?php
require 'vendor/autoload';

$client = new \GuzzleHttp\Client();
$response = $client-> get('https://example.com');
$responseContents = $response -> getBody();
