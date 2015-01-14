<?php
/**
 *
 * Author:  kaidi - ykdacd@outlook.com
 * Version: 
 * Date:    01/12, 2015
 */

namespace controllers\user;

use core\view;
use helpers\session;
use helpers\url;

class Signup extends \core\controller {

    public function index() {

        if (Session::get('loggedin')) {
            Url::redirect('home');
        }

        View::rendertemplate('header');
        View::render('home/headbar');
        View::render('user/signup');
        View::rendertemplate('footer');
    }

    public function check() {

        $email    = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $model = new \models\user\userManager();

        if ($model->isMailExist($email)) {

            echo "email-exist";
            return ;

        } else if ($model->isUserExist($username)) {

            echo "user-exist";
            return;

        } else {

            $data = array(
                'username' => $username,
                'password' => $password,
                'email'    => $email,
                'avatar'   => \helpers\url::template_path() . 'assets/img/default-avatar.png'
            );

            $model->addUser($data);

            Session::set('loggedin',    true);
            Session::set('currentUser', $username);
            Session::set('blogIndex',   0);
            echo "user-added";
            //Url::redirect('home');
        }


    }

}













