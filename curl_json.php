<?php

// URL de l'API REST
$url = '{POST_REST_ENDPOINT}';



// initialise une session cURL
$curl = curl_init();

// champs à envoyer
$fields  = array(
    'field_name_1' => 'Value 1',
    'field_name_2' => 'Value 2',
    'field_name_3' => 'Value 3'
);

$json_string = json_encode($fields);

// options de la session cURL
curl_setopt($curl, CURLOPT_URL, 'http://www.google.com');
curl_setopt($curl, CURLOPT_POST, TRUE);
curl_setopt($curl, CURLOPT_POSTFIELDS, $json_string);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content: application/json'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//exécute la session cURL 
$data = curl_exec($curl);

curl_close($curl);
