<?php

$url = '{POST_REST_ENDPOINT}';

// initialise une session cURL
$curl = curl_init();

// définit l'URL de la session cURL
$fields = array(

    'field_name_1' => 'Value 1',

    'field_name_2' => 'Value 2',

    'field_name_3' => 'Value 3'

);

$fields_string = http_build_query($fields);
 
// options de la session cURL
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, TRUE);
curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);

//exécute la session cURL 
$data = curl_exec($curl);

// ferme la session cURL
curl_close($curl);
