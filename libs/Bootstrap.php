<?php
/**
 * Created by PhpStorm.
 * User: calexander
 * Date: 5/1/18
 * Time: 10:14 AM
 */

class Bootstrap {

    function __construct()
    {
        $url = $_GET['url'] ?? null; // null coalesce instead of ternary
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        print_r($url);

        if (empty($url[0]))
        {
            require 'controllers/index.php';
            $controller = new Index();
            return false;
        }
        $file = 'controllers/'. $url[0] . '.php';
        if (file_exists($file)){
            require $file;
        } else {
            require 'controllers/MyErrorClass.php';
            $controller = new MyErrorClass();
            return false;
        }

        $controller = new $url[0];

        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]); // $controller->function()
        } else {
            if (isset($url[1])) {
                $controller->{$url[1]}(); // $controller->function()
            }
        }

    }
}