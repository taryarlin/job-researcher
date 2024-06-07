<?php
namespace Core\Middleware;

class Authenticated
{
    public function handle()
    {
        if(!$_SESSION['admin'] ?? false) {
            header('location: /admin/login');

            exit();
        }
    }
}
