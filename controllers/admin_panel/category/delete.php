<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$category = $db->query('select * from categories where id = :id', [':id' => $_POST['id']])->find();

if(!$category) {
    abort();
}

$db->query('delete from categories where id = :id', [':id' => $_POST['id']]);

header('location: /categories');
