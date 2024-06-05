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
$category = $db->query('select * from categories where id = :id', [':id' => $_POST['id']])->find();

if(!$category) {
    abort();
}

$db->query('update categories set name = :name where id = :id', [
    ':name' => $_POST['name'],
    ':id' => $_POST['id']
]);

header('location: /categories');
