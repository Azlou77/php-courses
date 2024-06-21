<!-- main content -->
<?php include 'models/Exhibition.php'; ?>
<div class="row">
	<!-- We display the title of the page -->->
	<?php $title = "Exhibitions"; ?>
	<h1 class="d-flex justify-content-center">Bienvenue sur la billeterie sur les expositions d'histoire de France</h1>

	<!-- Start a session -->
	<?php ob_start(); ?>
	<?php
	$exhibitions = getExhibitions();

	// We loop through the exhibitions
	foreach ($exhibitions as $exhibition) {
	?>
		<div class="col-4">
			<div class="card" style="width: 18rem;">

				<!-- Display image with jpg format -->
				<img src="img/<?= $exhibition['img'] . '.jpg'; ?>" class="card-img-top" alt="<?= $exhibition['img']; ?>">
				<div class="card-body">

					<!-- We display the post content. -->
					<h5 class="card-title"><?= $exhibition['title']; ?></h5>
					<p class="card-text"><?= $exhibition['content']; ?></p>
					<a href="#" class="btn btn-primary">Go somewhere</a>

					<!-- Display the date -->
					<p class="card-text"><small class="text-muted"><?= $exhibition['date']; ?></small></p>
				</div>
			</div>
		</div>
	<?php } ?>
	<!-- End the session -->
	<?php $content = ob_get_clean(); ?>
	<?php require('layout.php') ?>