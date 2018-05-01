<?php
/**
 * Created by PhpStorm.
 * User: calexander
 * Date: 5/1/18
 * Time: 10:22 AM
 */
class MyErrorClass extends Controller {

    function __construct()
    {
        parent::__construct();
        echo "This is an error!";
        return false;
    }
}