<?php

use Carbon\Carbon;
use Core\App;
use Core\Database;

$errors = [];

if(!\Core\Validator::string($_POST['title'])) {
    $errors[] = 'Title field is required.';
}

if(!\Core\Validator::string($_POST['salary_range'])) {
    $errors[] = 'Salary range field is required.';
}

if(!empty($errors)) {
    header('location: /jobs/create');

    return false;
}

if($_FILES['logo'] && $_FILES['logo']['name'] != '') {
    $unique_file_name = Carbon::now()->format('YmdHmi') . '_' . $_FILES['logo']['name'];

    $file_name = 'public/assets/images/' . $unique_file_name;

    move_uploaded_file($_FILES['logo']['tmp_name'], $file_name);
}

$db = App::resolve(Database::class);

$db->query('INSERT INTO jobs (category_id, company_id, title, requirement, description, salary_range, created_at, updated_at) VALUES (:category_id, :company_id, :title, :requirement, :description, :salary_range, :created_at, :updated_at)', [
    ':category_id' => $_POST['category_id'],
    ':company_id' => $_POST['company_id'],
    ':title' => $_POST['title'],
    ':requirement' => $_POST['requirement'] ?? null,
    ':description' => $_POST['description'] ?? null,
    ':salary_range' => $_POST['salary_range'],
    ':created_at' => Carbon::now()->format('Y-m-d H:m:i'),
    ':updated_at' => Carbon::now()->format('Y-m-d H:m:i'),
]);

header('location: /jobs');
