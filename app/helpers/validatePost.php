<?php

 function validatePost($post) {

    
    $errors = array();
    
    if (empty($post['title'])) {
        array_push($errors, 'Title is required');
    }

    if (empty($post['body'])) {
        array_push($errors, 'Body is required');
    }

    if (empty($post['topic_id'])) {
        array_push($errors, 'Please select a topic');
    }

    $existingTopic = selectOne('topics', ['name' => $post['name']]);
    if ($existingTopic) {
        if(isset($post['update-topic']) && $existingTopic['id'] != $post['id']) {
            array_push($errors, 'Name already exists');
        }
        
        if(isset($post['add-topic'])) {
            array_push($errors, 'Name already exists');
        }
    }


     return $errors;
 }

 ?>