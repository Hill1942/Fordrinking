<?php
/**
 * Created by PhpStorm.
 * User: kaidi
 * Date: 14-12-8
 * Time: 23:01
 */

class Registry {
    private $vars = array();

    public function __set($index, $value) {
        $this->vars[$index] = $value;
    }

    public function __get($index) {
        return $this->vars[$index];
    }
}