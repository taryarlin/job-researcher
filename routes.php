<?php

$router->get('/', 'controllers/index.php');


# Admin Panel
$router->get('/admin', 'controllers/admin_panel/index.php');
$router->get('/dashboard', 'controllers/admin_panel/dashboard.php');

# Admin
$router->get('/admins', 'controllers/admin_panel/admin/index.php');
$router->get('/admins/create', 'controllers/admin_panel/admin/create.php');
$router->post('/admins/create', 'controllers/admin_panel/admin/store.php');

$router->get('/users', 'controllers/admin_panel/dashboard.php');
