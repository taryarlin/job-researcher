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
    header('location: /jobs/edit');

    return false;
}

if($_FILES['logo'] && $_FILES['logo']['name'] != '') {
    $unique_file_name = Carbon::now()->format('YmdHmi') . '_' . $_FILES['logo']['name'];

    $file_name = 'public/assets/images/' . $unique_file_name;

    move_uploaded_file($_FILES['logo']['tmp_name'], $file_name);
}

$db = App::resolve(Database::class);

$query_string = "UPDATE jobs SET category_id = :category_id, company_id = :company_id, title = :title, requirement = :requirement, description = :description, salary_range = :salary_range, logo = :logo, updated_at = :updated_at WHERE id = :id";

$db->query($query_string, [
    ":category_id" => $_POST['category_id'],
    ":company_id" => $_POST['company_id'],
    ":title" => $_POST['title'],
    ":requirement" => $_POST['requirement'],
    ":description" => $_POST['description'],
    ":salary_range" => $_POST['salary_range'],
    ":logo" => $file_name ?? null,
    ":updated_at" => Carbon::now()->format('Y-m-d H:i:s'),
    ":id" => $_POST['id']
]);


header('location: /jobs');
