<?php
/**
 * Created by PhpStorm.
 * User: kaidi
 * Date: 14-12-9
 * Time: 21:56
 */

Class IndexController Extends BaseController {

    public function index() {


        /*** load the index template ***/
        $this->templateManager->show('index');

        //$this->template->show('index');
    }

}