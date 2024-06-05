<?php

use Core\App;
use Core\Database;

$errors = [];

if(!$_POST['id']) {
    $errors[] = 'Invalid admin ID';
}

$db = App::resolve(Database::class);

$admin = $db->query('SELECT * FROM admins WHERE id = :id', [':id' => $_POST['id']])->find();


$db->query('DELETE from admins WHERE id = :id', [':id' => $_POST['id']]);

header('location: /admins');
