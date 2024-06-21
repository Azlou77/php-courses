<?php

require('app/model.php');

$exhibitions = getExhibitions();

require('views/homepage.php');
