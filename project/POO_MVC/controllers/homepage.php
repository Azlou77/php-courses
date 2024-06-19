<?php
// controllers/homepage.php

require_once('../models/Exhibition.php');

function homepage() {
	$exhibitions= getExhibitions();

	require('../views/homepage.php');
}