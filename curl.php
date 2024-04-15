<?php
// initialise une session cURL
$curl = curl_init();
//définit l'URL de la session cURL
curl_setopt( $curl, CURLOPT_URL, 'http://www.google.com');
//exécute la session cURL 
curl_exec($curl);
//ferme la session cURL
curl_close($curl);  

?>