<?php

function validatePost($post)
{
    $errors = array();

    if (empty($post['title'])) {
        array_push($errors, 'Title is required');
    }

    if (empty($post['body'])) {
        array_push($errors, 'Body is required');
    }
    
    $existinPost = selectOne('posts', ['title' => $post['title']]);
    if($existinPost){
        array_push($errors, 'Post with that title already exists');
    }

    return $errors;
}