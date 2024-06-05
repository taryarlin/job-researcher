<?php

use Core\App;
use Core\Database;

$errors = [];

if(!\Core\Validator::string($_POST['name'])) {
    $errors[] = 'Name field is required.';
}

if(!empty($errors)) {
    header('location: /categories/create');

    return false;
}

$db = App::resolve(Database::class);

$db->query('INSERT INTO categories (name) VALUES (:name)', [
    ':name' => $_POST['name']
]);

header('location: /categories');
