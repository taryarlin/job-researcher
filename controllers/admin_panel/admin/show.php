<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$admin = $db->query('SELECT * FROM admins WHERE id = :id', [':id' => $_GET['id']])->find();

return view('admin_panel/admin/show.view.php', compact('admin'));
