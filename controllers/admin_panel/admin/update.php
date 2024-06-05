<?php

use Core\App;
use Core\Database;

$errors = [];

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

if(!$_POST['id']) {
    $errors[] = 'Invalid admin ID.';
}

$db = App::resolve(Database::class);
$admin = $db->query('SELECT * FROM admins WHERE id = :id', [':id' => $_POST['id']])->find();

if(!$admin) {
    $errors[] = 'Admin account not found.';
}

if(!\Core\Validator::string($name)) {
    $errors[] = 'Name field is required.';
}

if(!\Core\Validator::string($email)) {
    $errors[] = 'Email field is required.';
}

if(!\Core\Validator::string($phone)) {
    $errors[] = 'Phone field is required.';
}

if(!\Core\Validator::email($email)) {
    $errors[] = 'Invalid email format.';
}

if(!empty($errors)) {
    // header('location: /admins/edit?id=' . $_POST['id']);

    return view('admin_panel/admin/edit.view.php', compact('admin', 'errors'));
}

$update_query = 'UPDATE admins SET name = :name, email = :email, phone = :phone WHERE id = :id';

$db->query($update_query, [
    ':email' => $email,
    ':name' => $name,
    ':phone' => $phone,
    ':id' => $id
]);

header('location: /admins');
