<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$job = $db->query('SELECT * FROM jobs WHERE id = :id', [":id" => $_GET['id']])->find();

if(!$job) {
    abort();
}

$categories = $db->query('SELECT * FROM categories')->get();
$companies = $db->query('SELECT * FROM companies')->get();

$selected_category = $db->query('SELECT * FROM categories WHERE id = :id', [':id' => $job['category_id']])->find();
$selected_company = $db->query('SELECT * FROM companies WHERE id = :id', [':id' => $job['company_id']])->find();

return view('admin_panel/job/edit.view.php', compact('job', 'categories', 'companies', 'selected_category', 'selected_company'));
