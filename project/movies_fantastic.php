<?php include 'partials/header.php'; ?>

    <body>
        <?php include 'partials/navigation.php'; ?>
        <div class="container center">
        <h2 class="d-flex justify-content-center"> My fantastic movies </h2>
        <div class="row">
            <div class="col">
                <br>
                <?php
                //initialisation de curl
                $curl = curl_init();

                // Get the list movies
                curl_setopt($curl, CURLOPT_URL, 'https://api.themoviedb.org/3/list/list_id?api_key=api_key&language=en-US');
                //Evite d'afficher sur la page le résultat
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                // Envoie la requête
                $authorization = "Authorization: Bearer {token}";
                curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application /json', $authorization));

                //Execute la session cURL
                $resultat = curl_exec($curl);

                //Ferme la session cURL
                curl_close($curl);

               

                $resultat = json_decode($resultat, true);
                $list = $resultat['items'];

                // Parcours le tableau des listes
                foreach ($list as $key => $value) {

                    // Affiche les données sous forme de carte
                    echo '<div class="card" style="width: 18rem;">
                    <img src="https://image.tmdb.org/t/p/w500' . $value['poster_path'] . '" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title
                        ">' . $value['original_title'] . '</h5>
                        <p class="card-text">' . $value['overview'] . '</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>';
                }
                ?>
    </body>
</html>
