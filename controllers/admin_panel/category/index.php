<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$categories = $db->query('SELECT * FROM categories')->get();

return view('admin_panel/category/index.view.php', compact('categories'));
