<?php

use App\App;

if (!function_exists('dd')) {
    function dd($value)
    {
        echo '<pre>';
        die(var_dump($value));
        echo '</pre>';
    }
}

if (!function_exists('connect')) {
    function connect()
    {
        App::bind('config', require 'config/app.php');

        return Connection::make(App::get('config')['database']);
    }
}

if (!function_exists('view')) {
    function view($view, $data=null){
        if ($data != null) {
            extract($data);
        }
        require "../views/$view.views.php";
    }
}


