<?php
// URL de l'API REST
$url = '{POST_REST_ENDPOINT}';

// initialise une session cURL
$curl = curl_init();

if (function_exists('curl_file_create')){
    $fileAttachment = curl_file_create('/absolute/path/to/file');
}else {
    $fileAttachment= '@' . realpath('/absolute/path/to/file');

}

$fields = array(
    'fields1' => 'value 1',
    'fields2' => 'value 2',
    'fields3' => 'value 3',
    'uploaded_file' => $fileAttachment
);

// options de la session cURL
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $fields);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

//exécute la session cURL 
curl_exec($curl);

//ferme la session cURL
curl_close($curl);

?>
