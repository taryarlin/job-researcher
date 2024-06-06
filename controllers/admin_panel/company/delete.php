<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$company = $db->query('select * from companies where id = :id', [':id' => $_POST['id']])->find();

if(!$company) {
    abort();
}

$db->query('delete from companies where id = :id', [':id' => $_POST['id']]);

header('location: /companies');
