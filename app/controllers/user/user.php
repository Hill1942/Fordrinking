<?php
/**
 *
 * Author:  kaidi - ykdacd@outlook.com
 * Version: 
 * Date:    01/13, 2015
 */

namespace controllers\user;


use helpers\Session;

class User extends \core\controller {

    public function post() {

        $model = new \models\user\user();

        $data = array(
            'user'    => Session::get("currentUser"),
            'content' => $_POST['content']
        );

        $model->post($data);


    }


}