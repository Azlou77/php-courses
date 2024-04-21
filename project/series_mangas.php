<?php include 'partials/header.php'; ?>

    <body>
        <?php include 'partials/navigation.php'; ?>
        <div class="container center">
        <h2 class="d-flex justify-content-center"> My series mangas </h2>
        <div class="row">
            <div class="col">
                <br>
                <?php
                // initialise curl
                $curl = curl_init();

                 // Get the list series mangas
                 curl_setopt($curl, CURLOPT_URL, 'https://api.themoviedb.org/3/list/{id_list-name_list}?api_key={api_key}&language=en-US');
                
                 // Avoid to display errors
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                // Send request
                $authorization = "Authorization: Bearer {token}";
                curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application /json', $authorization));

                // Execute request
                $resultat = curl_exec($curl);

                // Close request
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
                        ">' . $value['original_title'] . '</h5>
                        <p class="card-text">' . $value['overview'] . '</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>';
                }
                ?>
    </body>
</html>
