<!-- main content -->
<div class="row">
    <h1 class="d-flex justify-content-center">Bienvenue sur la billeterie sur les expositions d'histoire de France</h1>

    <!--Redirect to the  index page-->
    <a href="../index.php">Retour à la page d'accueil</a>
    <!-- We loop through the comments -->
    <?php ob_start(); ?>

    <?php
    // We loop through the comments
    foreach ($comments as $comment) {
    ?>
        <section style="background-color: #e7effd;">
            <div class="col-md-11 col-lg-9 col-xl-7">
                <div class="d-flex flex-start mb-4">
                    <img class="rounded-circle shadow-1-strong me-3" src="img/<?= $comment['img'] . '.jpg'; ?>" alt="avatar" width="65" height="65" />
                    <div class="card w-100">
                        <div class="card-body p-4">
                            <div class="">
                                <h5> <?= $comment['author']; ?></h5>
                                <p class="small"><?= $comment['comment_date']; ?></p>
                                <p>
                                    <?= $comment['content']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</div>
<?php } ?>
<form action="index.php?action=addComment&id=<?= $post['identifier'] ?>" method="post">
    <div>
        <label for="author">Auteur</label><br />
        <input type="text" id="author" name="author" />
    </div>
    <div>
        <label for="content">Commentaire</label><br />
        <textarea id="content" name="content"></textarea>
</form>

<!-- End the session -->
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>

</body>

</html>