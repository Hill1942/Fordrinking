<?php
/**
 *
 * Author:  kaidi - ykdacd@outlook.com
 * Version: 0.1
 * Date:    01/11, 2015
 */

namespace controllers\user;

use \helpers\password,
    \helpers\session,
    \helpers\url,
    \core\view;


class Auth extends \core\controller {

    public function login() {

        $data['title'] = 'Login';

        $model = new \models\user\auth();


        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
        }


        View::rendertemplate('header', $data);
        View::render('welcome/headbar', $data);
        View::render('user/login', $data);
        View::rendertemplate('footer',$data);



    }

    public function logout() {

    }





}