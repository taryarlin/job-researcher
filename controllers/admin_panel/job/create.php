<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$categories = $db->query('SELECT * FROM categories')->get();
$companies = $db->query('SELECT * FROM companies')->get();

return view('admin_panel/job/create.view.php', compact('categories', 'companies'));
