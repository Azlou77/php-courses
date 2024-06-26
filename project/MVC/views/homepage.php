<!-- main content -->
<div class="row">
	<!-- We display the title of the page -->->
	<?php $title = "posts"; ?>
	<h1 class="d-flex justify-content-center">Bienvenue sur la billeterie sur les expositions d'histoire de France</h1>

	<!-- Start a session -->
	<?php ob_start(); ?>
	<?php

	// We loop through the posts to display them.
	foreach ($posts as $post) {
	?>
		<div class="col-4">
			<div class="card" style="width: 18rem;">

				<!-- Display image with jpg format -->
				<img src="img/<?= $post['img'] . '.jpg'; ?>" class="card-img-top" alt="<?= $post['img']; ?>">
				<div class="card-body">

					<!-- We display the post content. -->
					<h5 class="card-title"><?= $post['title']; ?></h5>
					<p class="card-text"><?= $post['content']; ?></p>
					<a href="#" class="btn btn-primary">Go somewhere</a>

				</div>
			</div>
		</div>
	<?php } ?>
	<!-- End the session -->
	<?php $content = ob_get_clean(); ?>
	<?php require('layout.php') ?>