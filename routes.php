<?php

$router->get('/', 'controllers/index.php');


# Admin Panel
$router->get('/admin', 'controllers/admin_panel/index.php');
$router->get('/dashboard', 'controllers/admin_panel/dashboard.php');

# Admin
$router->get('/admins', 'controllers/admin_panel/admin/index.php');
$router->get('/admins/show', 'controllers/admin_panel/admin/show.php');
$router->get('/admins/create', 'controllers/admin_panel/admin/create.php');
$router->post('/admins/create', 'controllers/admin_panel/admin/store.php');
$router->get('/admins/edit', 'controllers/admin_panel/admin/edit.php');
$router->post('/admins/edit', 'controllers/admin_panel/admin/update.php');
$router->post('/admins/delete', 'controllers/admin_panel/admin/delete.php');

# Category
$router->get('/categories', 'controllers/admin_panel/category/index.php');
$router->get('/categories/create', 'controllers/admin_panel/category/create.php');
$router->post('/categories/create', 'controllers/admin_panel/category/store.php');
$router->get('/categories/edit', 'controllers/admin_panel/category/edit.php');
$router->post('/categories/edit', 'controllers/admin_panel/category/update.php');
$router->post('/categories/delete', 'controllers/admin_panel/category/delete.php');

$router->get('/users', 'controllers/admin_panel/dashboard.php');
