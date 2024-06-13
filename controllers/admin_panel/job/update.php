<?php

use Carbon\Carbon;
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

if($_FILES['logo'] && $_FILES['logo']['name'] != '') {
    $unique_file_name = Carbon::now()->format('YmdHmi') . '_' . $_FILES['logo']['name'];

    $file_name = 'public/assets/images/' . $unique_file_name;

    move_uploaded_file($_FILES['logo']['tmp_name'], $file_name);
}


$db->query('update companies set name = :name, logo = :logo where id = :id', [
    ':name' => $_POST['name'],
    ':logo' => $file_name,
    ':id' => $_POST['id']
]);

header('location: /companies');
