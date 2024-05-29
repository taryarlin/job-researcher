<?php

$config = require 'config.php';
$db = new \Core\Database($config['database']);

$admins = $db->query('SELECT * FROM admins')->get();

require 'views/admin_panel/admin/index.view.php';
