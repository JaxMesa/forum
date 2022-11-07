<?php
// CURRENTLY NOT USED
$username = $_POST['username'];
$password = $_POST['password'];
$passwordConfirm = $_POST['password_confirm'];

$data = $_POST;

if (empty($data['username']) ||
    empty($data['password']) ||
    empty($data['email']) ||
    empty($data['password_confirm'])) {
    
    die('Please fill all required fields!');
}

if ($data['password'] !== $data['password_confirm']) {
   die('Password and Confirm password should match!');   
} else {
    $current_password = $data["password"];
}