<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$jobs = $db->query('SELECT * FROM jobs')->get();

return view('admin_panel/job/index.view.php', compact('jobs'));
