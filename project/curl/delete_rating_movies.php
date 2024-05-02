<?php include 'partials/header.php'; ?>
<body>
    <?php include 'partials/navigation.php'; ?>
    <div class="container center">
    <h2 class="d-flex justify-content-center"> Form Delete </h2>
    <div class="row">
        <div class="col">
            <br>
            <?php
            require 'vendor/autoload.php';

            // Load .env file
            $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
            $dotenv->load();
            $dotenv->required([ 'TOKEN']);

            // Variables
            $token = $_ENV['TOKEN'];
            $movie_id = $_POST['movie_id'];

            $curl = curl_init();

            // CURL options
            curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.themoviedb.org/3/movie/$movie_id/rating",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer $token",
                "accept: application/json",
                "content-type: application/json"
            ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
            echo "cURL Error #:" . $err;
            } else {
            // Bootstrap alert
                echo '<div class="alert alert-success" role="alert">
                The item/record was deleted successfully.!
                </div>';

            }

            ?>
</body>
</html>