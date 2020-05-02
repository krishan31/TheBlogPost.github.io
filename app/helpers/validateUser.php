<?php

function validateUser($user)
{
    $errors = array();

     
    if(empty($user['username'])) {
        array_push($errors, 'username is required');
    }
    if(empty($user['email'])) {
        array_push($errors, 'email is required');
    }
    if(empty($user['password'])) {
        array_push($errors, 'password is required');
    }
   
    if($user['passwordConf'] !== $user['password']){
        array_push($errors, 'password does not match');
    }

        $existingUser = selectOne('user', ['email' => $user['email']]);
        if (isset($existingUser)){
            array_push($errors, 'Email already exists');
        }

        return $errors;
}