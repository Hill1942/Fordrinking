<?php
/**
 * Created by PhpStorm.
 * User: kaidi
 * Date: 14-12-8
 * Time: 23:03
 */

class Router {

    private $registry;

    private $path;

    private $args = array();

    private $file;

    private $controller;

    private $action;

    public function __construct() {
       // $this->registry = $registry;
    }

    public function setPath($path) {
        if (is_dir($path) == false) {
            throw new Exception('Invalid controller path: ');
        }

        $this->path = $path;
    }

    public function loader() {
        $this->getController();

        if (is_readable($this->file) == false) {
            $this->file = $this->path . '/error404.php';
            $this->controller = 'error404.php';
        }

        include $this->file;

        $class = $this->controller . 'Controller';
        $controller = new $class();
        $controller->index();

    }

    private function getController() {
        $route = (empty($_GET['rt'])) ? '' : $_GET['rt'];

        if (empty($route)) {
            $this->controller = 'index';
        } else {
            $this->controller = $route;
        }



        $this->file = $this->path . '/' . $this->controller . '.controller.php';
    }



}
























