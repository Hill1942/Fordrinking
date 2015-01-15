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
use models\UserManager;

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

        $manager = new UserManager();

        if ($manager->isMailExist($email)) {
            echo "email-exist";
            return ;
        }

        if ($manager->isMailExist($username)) {
            echo "user-exist";
            return;
        }

        $manager->addUser($username, $password, $email);

        Session::set('loggedin',    true);
        Session::set('currentUser', $username);

        echo "user-added";
    }

}













