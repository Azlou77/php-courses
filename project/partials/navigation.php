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
                <li><a class="dropdown-item" href="/project/movies_historic.php">Movies historic</a></li>
                <li><a class="dropdown-item" href="/project/movies_fantastic.php">Movies fantastic</a></li>
                <li><a class="dropdown-item" href="#">Movies actors</a></li>
            </ul>
        </div>

        <!-- Series -->
        <div class="dropdown">
            <button type="button" class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown">
                Series
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/project/series_fantastic.php">Series fantastic</a></li>
                <li><a class="dropdown-item" href="#">Series Mangas</a></li>
                <li><a class="dropdown-item" href="#">Series actors</a></li>
            </ul>
            

            
        </div>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <!--  Icon search -->
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            
        </form>
        
</nav>

<!-- End Navigation -->