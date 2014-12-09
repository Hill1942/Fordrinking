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

    public function __construct($registry) {
        $this->registry = $registry;
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
        $controller = new $class($this->registry);

        if (is_callable(array($controller, $this->action)) == false) {
            $action = 'index';
        } else {
            $action = $this->action;
        }

        $controller->$action();
    }

    private function getController() {
        $route = (empty($_GET['rt'])) ? '' : $_GET['rt'];

        if (empty($route)) {
            $route = 'index';
        } else {
            $parts = explode('/', $route);
            $this->controller = $parts[0];
            if (isset($parts[1])) {
                $this->action = $parts[1];
            }
        }

        if (empty($this->controller)) {
            $this->controller = 'index';
        }

        if (empty($this->action)) {
            $this->action = 'index';
        }

        $this->file = $this->path . '/' . $this->controller . '.php';
    }



}
























