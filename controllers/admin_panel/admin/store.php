<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

if($name === '' || $email === '' || $phone === '' || $password === '') {
    header('location: /admins/create');

    return false;
}

$config = require 'config.php';
$db = new \Core\Database($config['database']);


$query = "INSERT INTO admins(name, email, phone, password) VALUES (:name, :email, :phone, :password)";

$db->query($query, [
    ':name' => $name,
    ':email' => $email,
    ':phone' => $phone,
    ':password' => md5($password),
]);


header('location: /admins/create');
