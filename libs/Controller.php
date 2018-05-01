<?php
/**
 * Created by PhpStorm.
 * User: calexander
 * Date: 5/1/18
 * Time: 11:27 AM
 */
class Controller {

    function __construct()
    {
        echo "Main Controller<br />";
        $this->view = new View();
    }
}