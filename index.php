<?php
/**
 * Created by PhpStorm.
 * User: calexander
 * Date: 5/1/18
 * Time: 9:31 AM
 */

$url = explode('/', $_GET['url']);
print_r($url);
require 'controllers/'. $url[0] . '.php';
$controller = new $url[0];