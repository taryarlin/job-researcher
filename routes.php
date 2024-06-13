<?php

$router->get('/', 'controllers/index.php');

# Admin Panel
$router->get('/admin', 'controllers/admin_panel/index.php');
$router->get('/dashboard', 'controllers/admin_panel/dashboard.php');

# Admin Login
$router->get('/admin/login', 'controllers/admin_panel/auth/login_form.php')->only('guest');
$router->post('/admin/login', 'controllers/admin_panel/auth/login.php')->only('guest');

# Admin
$router->get('/admins', 'controllers/admin_panel/admin/index.php')->only('auth');
$router->get('/admins/show', 'controllers/admin_panel/admin/show.php');
$router->get('/admins/create', 'controllers/admin_panel/admin/create.php');
$router->post('/admins/create', 'controllers/admin_panel/admin/store.php');
$router->get('/admins/edit', 'controllers/admin_panel/admin/edit.php');
$router->post('/admins/edit', 'controllers/admin_panel/admin/update.php');
$router->post('/admins/delete', 'controllers/admin_panel/admin/delete.php');

# Category
$router->get('/categories', 'controllers/admin_panel/category/index.php')->only('auth');
$router->get('/categories/create', 'controllers/admin_panel/category/create.php');
$router->post('/categories/create', 'controllers/admin_panel/category/store.php');
$router->get('/categories/edit', 'controllers/admin_panel/category/edit.php');
$router->post('/categories/edit', 'controllers/admin_panel/category/update.php');
$router->post('/categories/delete', 'controllers/admin_panel/category/delete.php');

# Company
$router->get('/companies', 'controllers/admin_panel/company/index.php');
$router->get('/companies/create', 'controllers/admin_panel/company/create.php');
$router->post('/companies/create', 'controllers/admin_panel/company/store.php');
$router->get('/companies/edit', 'controllers/admin_panel/company/edit.php');
$router->post('/companies/edit', 'controllers/admin_panel/company/update.php');
$router->post('/companies/delete', 'controllers/admin_panel/company/delete.php');

# Job
$router->get('/jobs', 'controllers/admin_panel/job/index.php');
$router->get('/jobs/create', 'controllers/admin_panel/job/create.php');
$router->post('/jobs/create', 'controllers/admin_panel/job/store.php');
$router->get('/jobs/edit', 'controllers/admin_panel/job/edit.php');
$router->post('/jobs/edit', 'controllers/admin_panel/job/update.php');
$router->post('/jobs/delete', 'controllers/admin_panel/job/delete.php');

$router->get('/users', 'controllers/admin_panel/dashboard.php');
