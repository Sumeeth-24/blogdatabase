<?php

 function validateTopic($topic) {

    
    $errors = array();
    
    if (empty($topic['name'])) {
        array_push($errors, 'Name is required');
    }


    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if ($existingPost) {
        if(isset($post['update-post']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'Post with that title already exists');
        }
        
        if(isset($post['add-post'])) {
            array_push($errors, 'Post with that title already exists');
        }
    }


     return $errors;
 }