<?php
// controllers/post.php

require_once('app/model.php');


function post(string $identifier)
{
    $exhibition = getExhibition($identifier);
    $comments = getComments($identifier);
    require('../views/post.php');
}
