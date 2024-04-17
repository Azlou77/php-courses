<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <!-- Boostrap assets -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title> Accueil</title>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-succes">
        <a class="navbar-brand" href="index.php">Accueil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- Movies -->
            <div class="dropdown">
                <button type="button" class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown">
                    Movies
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Movies favoris</a></li>
                    <li><a class="dropdown-item" href="#">Movies historic</a></li>
                    <li><a class="dropdown-item" href="#">Movie fantastic</a></li>
                </ul>
            </div>

            <!-- Series -->
            <div class="dropdown">
                <button type="button" class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown">
                    Series
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Series favoris</a></li>
                    <li><a class="dropdown-item" href="#">Series Mangas</a></li>
                </ul>
            </div>
    </nav>

    <div class="container center">
        <div class="row">
            <div class="col">
                <br>
                <?php
                //initialisation de curl
                $curl = curl_init();

                curl_setopt($curl, CURLOPT_URL, '{curl path}');
                //Evite d'afficher sur la page le résultat
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                // Envoie la requête
                $authorization= "Authorization: Bearer {your token}";
                curl_setopt($curl, CURLOPT_HTTPHEADER,array('Content-type: application /json', $authorization) );

                //Execute la session cURL
                $resultat= curl_exec($curl);
    
                //Execute la session cURL
                $resultat = curl_exec($curl);

                //Ferme la session cURL
                curl_close($curl);

                //Affiche le résultat
                echo $resultat;

                ?>
</body>

</html>