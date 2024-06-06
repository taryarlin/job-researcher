<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$companies = $db->query('SELECT * FROM companies')->get();

return view('admin_panel/company/index.view.php', compact('companies'));
