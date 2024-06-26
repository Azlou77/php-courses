<?php

require_once('app/model.php');

function post(string $identifier)
{
    $post = getPost($identifier);
    $comments = getComments($identifier);

    require('views/post.php');
}
