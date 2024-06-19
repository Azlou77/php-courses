<?php
// controllers/post.php

require_once('../models/Exhibition.php')

function post(string $identifier) {
    $exhibition = getExhibitions($identifier);
    $comments = getComments($identifier);

}