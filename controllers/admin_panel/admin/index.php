<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$admins = $db->query('SELECT * FROM admins')->get();

return view('admin_panel/admin/index.view.php', compact('admins'));
