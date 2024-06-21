<?php
// controllers/homepage.php

require_once('app/model.php');
function homepage()
{
	$exhibitions = getExhibitions();

	require_once('views/homepage.php');
}
