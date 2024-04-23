<?php include 'partials/header.php'; ?>

<body>
    <?php include 'partials/navigation.php'; ?>
    <div class="container center">
        <h2 class="d-flex justify-content-center"> My actor serie</h2>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <br>
                <?php
                // initialise curl
                $curl = curl_init();

                // Get the list series fantastic
                curl_setopt($curl, CURLOPT_URL, 'https://api.themoviedb.org/3/search/person?query=Conor%20McGregor&include_adult=false&language=en-US&page=1');

                // Avoid to display errors
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                // Send the request
                $authorization = "Authorization: Bearer {token}";
                curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application /json', $authorization));

                //Execute the curl session
                $resultat = curl_exec($curl);

                // Close the curl session
                curl_close($curl);

                // Decode the result
                $resultat = json_decode($resultat, true);
                $list = $resultat['results'];


                // Browse the list array
                foreach ($list as $key => $value) {

                    // Display the data as a card
                    echo '
                    <div class="card" style="width: 18rem;">
                        <img src="https://image.tmdb.org/t/p/w500' . $value['profile_path'] . '" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="d-flex justify-content-center card-title">' . $value['name'] . '</h5>                         
                                <a href="#" class="btn btn-primary d-flex justify-content-center">Go somewhere</a>
                            </div>
                    </div>';
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <?php
                // Get the filmography of the actor
                $filmography = $value['known_for'];

                // Loop through the movies/series and display their titles
                foreach ($filmography as $entry) {
                    if ($entry['media_type'] == 'movie') {
                        $title = $entry['title'];
                        echo '
                    <div class="card" style="width: 18rem;">
                        <img src="https://image.tmdb.org/t/p/w500' . $entry['poster_path'] . '" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center">' . $title . '</h5>
                            <p class="card-text">' . $entry['overview'] . '</p>
                        </div>
                    </div>';


                    } elseif ($entry['media_type'] == 'tv') {
                        $name = $entry['name'];
                        echo '
                        <div class="card" style="width: 18rem;">
                            <img src="https://image.tmdb.org/t/p/w500' . $entry['poster_path'] . '" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">' . $name . '</h5>
                                <p class="card-text">' . $entry['overview'] . '</p>
                            </div>
                        </div>';
                    }
                }
                ?>
            </div>
        </div>
</body>

</html>