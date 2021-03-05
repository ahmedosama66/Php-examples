<?php

function secured($data) {
    $val = trim($data);
    $val = htmlspecialchars($val);
    return $val ;
}

$errors = [] ;

$username = secured($_POST['username']);
$email = secured($_POST['email']);
$password = secured($_POST['password']);

if(empty($email)){
    $errors['email'] = 'email can`t be empty';
} else {
    if(!filter_var($username , FILTER_VALIDATE_EMAIL )){
        $errors['email'] = 'you must insert a valid mail address';
    }
}

if(empty($username)){
    $errors['username'] = 'username can`t be empty';
} else {
    if(!preg_match('/^[a-zA-Z0-9]{5,10}$/' , $username )){
        $errors['username'] = 'username must be valid';
    }
}




session_start();
$_SESSION['errors'] = $errors ;




header('location: index.php');