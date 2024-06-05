<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$category = $db->query('SELECT * FROM categories WHERE id = :id', [":id" => $_GET['id']])->find();

if(!$category) {
    abort();
}

return view('admin_panel/category/edit.view.php', compact('category'));
