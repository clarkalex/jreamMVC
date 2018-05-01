<?php
/**
 * Created by PhpStorm.
 * User: calexander
 * Date: 5/1/18
 * Time: 9:42 AM
 */
class Index  extends Controller {
    function __construct()
    {
        parent::__construct();

        $this->view->render('index/index');
    }
}