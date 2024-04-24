<?php include 'partials/header.php'; ?>

    <body>
        <?php include 'partials/navigation.php'; ?>
        <div class="container center">
        <h2 class="d-flex justify-content-center"> My fantastic series </h2>
        <div class="row">
            <div class="col">
                <br>
                <?php
                require 'vendor/autoload.php';

                // Load .env file
                $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
                $dotenv->load();
                $dotenv->required(['LIST_ID_SERIES_FANTASTIC', 'TOKEN', 'API_KEY']);

                $list_id_series_fantastic = $_ENV['LIST_ID_SERIES_FANTASTIC'];
                $token = $_ENV['TOKEN'];
                $api_key = $_ENV['API_KEY'];

                // initialise curl
                $curl = curl_init();

                 // Get the list series fantastic
                 curl_setopt($curl, CURLOPT_URL, 'https://api.themoviedb.org/3/list/' . $list_id_series_fantastic . '?api_key=' . $api_key . '&language=en-US');
                // Avoid to display errors
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                // Send the request
                $authorization = "Authorization: Bearer $token";
                curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application /json', $authorization));

                //Execute the curl session
                $resultat = curl_exec($curl);

                // Close the curl session
                curl_close($curl);

                $resultat = json_decode($resultat, true);
                $list = $resultat['items'];

                // Browse the list array
                foreach ($list as $key => $value) {

                    // Display data as card
                    echo '<div class="card" style="width: 18rem;">
                    <img src="https://image.tmdb.org/t/p/w500' . $value['poster_path'] . '" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title
                        ">' . $value['original_name'] . '</h5>
                        <p class="card-text">' . $value['overview'] . '</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>';
                }
                ?>
    </body>
</html>
