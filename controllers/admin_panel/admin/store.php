<?php

use Core\App;
use Core\Database;

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$errors = [];

if(!\Core\Validator::string($name)) {
    $errors[] = 'Name field is required.';
}

if(!\Core\Validator::string($email)) {
    $errors[] = 'Email field is required.';
}

if(!\Core\Validator::string($phone)) {
    $errors[] = 'Phone field is required.';
}

if(!\Core\Validator::string($password)) {
    $errors[] = 'Password field is required.';
}

if(!\Core\Validator::email($email)) {
    $errors[] = 'Invalid email format.';
}

if(!empty($errors)) {
    header('location: /admins/create');

    return false;
}

$db = App::resolve(Database::class);

$query = "INSERT INTO admins(name, email, phone, password) VALUES (:name, :email, :phone, :password)";

$db->query($query, [
    ':name' => $name,
    ':email' => $email,
    ':phone' => $phone,
    ':password' => md5($password),
]);

header('location: /admins');
