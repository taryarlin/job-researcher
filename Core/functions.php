<?php

function dd($param)
{
    echo '<pre>';

    var_dump($param);

    echo '</pre>';

    die();
}

function abort($error_code = 404)
{
    http_response_code($error_code);

    require("views/$error_code.php");

    die();
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('views/' . $path);
}
