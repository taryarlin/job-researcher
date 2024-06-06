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

if($_FILES['logo'] && $_FILES['logo']['name'] != '') {
    $file_name = 'public/assets/images/' . $_FILES['logo']['name'];

    move_uploaded_file($_FILES['logo']['tmp_name'], $file_name);
}

$db = App::resolve(Database::class);

$db->query('INSERT INTO companies (name, logo) VALUES (:name, :logo)', [
    ':name' => $_POST['name'],
    ':logo' => $file_name
]);

header('location: /companies');
