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
                <li><a class="dropdown-item" href="/project/curl/movies_historic.php">Movies historic</a></li>
                <li><a class="dropdown-item" href="/project/curl/movies_fantastic.php">Movies fantastic</a></li>
            </ul>
            
        </div>

        <!-- Series -->
        <div class="dropdown">
            <button type="button" class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown">
                Series
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/project/curl/series_fantastic.php">Series fantastic</a></li>
                <li><a class="dropdown-item" href="/project/curl/series_mangas.php">Series mangas</a></li>
            </ul>
        </div>

        <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/project/curl/movies-series_actors.php">Actor</a>
        <a class="nav-link active" aria-current="page" href="/project/curl/form.php">Form</a>
        <a class="nav-link active" aria-current="page" href="/project/curl/movies_rated.php">Rated movies</a>
      </div>

        
</nav>

<!-- End Navigation -->