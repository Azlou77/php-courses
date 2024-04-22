<?php include 'partials/header.php'; ?>

    <body>
        <?php include 'partials/navigation.php'; ?>
        <div class="container center">
        <h2 class="d-flex justify-content-center"> My series mangas </h2>
        <div class="row">
            <div class="col">
                <br>
                <?php

                $curl = curl_init();

                curl_setopt_array($curl, [
                CURLOPT_URL => "https://api.themoviedb.org/3/list/list_id/add_item",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_HTTPHEADER => [
                    "Authorization: Bearer {token}",
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
                echo $response;
                }
                ?>
    </body>
</html>
