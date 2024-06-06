<?php

use Core\App;
use Core\Database;

$errors = [];

if(!\Core\Validator::string($_POST['name'])) {
    $errors[] = 'Name field is required.';
}

if(!empty($errors)) {
    header('location: /companies/create');

    return false;
}

$db = App::resolve(Database::class);
$company = $db->query('select * from companies where id = :id', [':id' => $_POST['id']])->find();

if(!$company) {
    abort();
}

$db->query('update companies set name = :name where id = :id', [
    ':name' => $_POST['name'],
    ':id' => $_POST['id']
]);

header('location: /companies');
