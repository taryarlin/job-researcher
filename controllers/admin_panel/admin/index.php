<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$admins = $db->query('SELECT * FROM admins')->get();

require 'views/admin_panel/admin/index.view.php';
