<?php include 'partials/header.php'; ?>

    <body>
        <?php include 'partials/navigation.php'; ?>
        <div class="container center">
        <h2 class="d-flex justify-content-center"> My rated movies </h2>
        <div class="row">
            <div class="col">
                <br>
                <?php
                require 'vendor/autoload.php';

                // Load .env file
                $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
                $dotenv->load();
                $dotenv->required(['LIST_ID_HISTORIC', 'TOKEN', 'API_KEY']);


                $account_id = $_ENV['ACCOUNT_ID'];
                $token = $_ENV['TOKEN'];
                $api_key = $_ENV['API_KEY'];


                //initialisation de curl
                $curl = curl_init();    

                 // Get the list movies
                 curl_setopt($curl, CURLOPT_URL, 'https://api.themoviedb.org/3/account/$account_id/rated/movies?language=en-US&page=1&sort_by=created_at.asc');
                //Evite d'afficher sur la page le résultat
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                // Envoie la requête
                $authorization = "Authorization: Bearer $token";
                curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application /json', $authorization));

                //Execute la session cURL
                $resultat = curl_exec($curl);

                //Ferme la session cURL
                curl_close($curl);

                $resultat = json_decode($resultat, true);
                $list = $resultat['results'];

                // Parcours le tableau des listes
                foreach ($list as $key => $value) {

                    // Affiche les données sous forme de carte
                    echo '<div class="card" style="width: 18rem;">
                    <img src="https://image.tmdb.org/t/p/w500' . $value['poster_path'] . '" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title
                        ">' . $value['original_title'] . '</h5>
                        <p class="card-text">' . $value['overview'] . '</p>
                        <strong class="card-text"> Vote moyen: </strong> ' . $value['vote_average'] . '
                        <br>
                        <strong class="card-text">Décompte des voix: </strong> ' . $value['vote_count'] . '
                        <br>
                        <strong class="card-text">Notations: </strong> ' . $value['rating'] . '
                        
                    </div>
                </div>';
                }
                ?>
    </body>
</html>
