<?php

require 'Core/functions.php';
// require('router.php');

$config = require('config.php');

const BASE_PATH = __DIR__ . '/../';


// $db = new Database($config['database']);

// $db = new Core\Database($config);

$router = new Core\Router;


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
