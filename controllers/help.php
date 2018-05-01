<?php
/**
 * Created by PhpStorm.
 * User: calexander
 * Date: 5/1/18
 * Time: 9:53 AM
 */
class Help extends Controller {
    function __construct()
    {
        parent::__construct();
        echo "we are in help<br />";
    }

    public function other($arg = false) {
        echo "We are inside other<br />";
        echo "Optional: " . $arg . "<br />";
    }
}