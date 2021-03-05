<?php


$conn = new mysqli('localhost' , 'root' , '' , 'before_project');

$username = $_POST['username'];
$password = md5($_POST['password']);

$select = "SELECT * FROM users WHERE name = ? AND password  = ?";
$prepare = $conn -> prepare($select);
$prepare -> bind_param('ss' , $username , $password);
$prepare -> execute();

$result= $prepare -> get_result();
// $user = $result -> fetch_assoc();

foreach($result as $user) {
    print_r($user);
}


