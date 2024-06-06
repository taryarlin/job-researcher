<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$company = $db->query('SELECT * FROM companies WHERE id = :id', [":id" => $_GET['id']])->find();

if(!$company) {
    abort();
}

return view('admin_panel/company/edit.view.php', compact('company'));
