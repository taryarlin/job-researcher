<?php

use Core\App;
use Core\Database;

$errors = [];

if(!\Core\Validator::string($_POST['email'])) {
    $errors[] = 'Email field is required.';
}

if(!\Core\Validator::string($_POST['password'])) {
    $errors[] = 'Password field is required.';
}

if(!\Core\Validator::email($_POST['email'])) {
    $errors[] = 'Invalid email format.';
}

$db = App::resolve(Database::class);

$admin = $db->query('SELECT * FROM admins WHERE email = :email AND password = :password', [
    ':email' => $_POST['email'],
    ':password' => $_POST['password'],
])->find();

if(!$admin) {
    header('location: /admin/login');
    exit();
}

$_SESSION['admin'] = $admin['email'];

header('location: /admins');
exit();
