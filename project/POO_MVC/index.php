<?php
require('models/Exhibition.php');

// Access to function getExhibitions()
$exhibitions = getExhibitions();


// Display the homepage

require('views/homepage.php');