<?php
/**
 * Created by PhpStorm.
 * User: kaidi
 * Date: 14-12-8
 * Time: 22:58
 */

abstract class BaseController {
    //protected $registry;
    protected $templateManager;

    function __construct() {
        $this->templateManager = new Template();
    }

    abstract function index();
}