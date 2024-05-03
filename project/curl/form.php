<?php include 'partials/header.php'; ?>
    <body>
        <?php include 'partials/navigation.php'; ?>
        <div class="container center">
            <h2 class="d-flex justify-content-center"> Form movies </h2>
            <div class="row">
                <div class="col-6 d-flex justify-content-center">
                    <!-- Form to add a movie -->
                    <form action="post_movies.php" method="post">
                        <input type="number" name="movie_id" placeholder="Movie ID">
                        <!-- Add other input fields for movie details -->
                        <input type="submit" value="Add Movie">
                    </form>
                    <br>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <!-- Form to delete a movie -->
                    <form action="delete_rating_movies.php" method="post">
                        <input type="number" name="movie_id" placeholder="Movie ID">
                        <!-- Add other input fields for movie details -->
                        <input type="submit" value="Delete movie">
                    </form>
                </div>
    </body>
    
</html>
