<?php
/**
 * Created by PhpStorm.
 * User: kaidi
 * Date: 14-12-8
 * Time: 22:58
 */

abstract class BaseController {
    protected $registry;

    function __construct($registry) {
        $this->registry = $registry;
    }

    abstract function index();
}