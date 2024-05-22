<?php

require 'Core/functions.php';
// require('router.php');
require 'Core/Database.php';

const BASE_PATH = __DIR__ . '/../';

dd(BASE_PATH);


$config = require('config.php');
$db = new Database($config['database']);



// $admins = $db->query('select * from admins')->get();

// dd($admins);
