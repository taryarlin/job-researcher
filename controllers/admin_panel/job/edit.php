<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$job = $db->query('SELECT * FROM jobs WHERE id = :id', [":id" => $_GET['id']])->find();

if(!$job) {
    abort();
}

return view('admin_panel/job/edit.view.php', compact('job'));
