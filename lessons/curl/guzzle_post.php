<?php
require 'vendor/autoload.php';

// initialise une nouvelle instance
$client = new \GuzzleHttp\Client();

// formulaire avec champs
$options = [
    'form_params' => [
        'fields1' => 'value1',
        'fields2' => 'value2',
        'fields3' => 'value3',


    ]
];

// reponse du serveur
$response  = $client->post("{POST_REST_ENDPOINT}", $options);

?>


?>