<?php
/**
 *
 * Author:  kaidi - ykdacd@outlook.com
 * Version: 0.1
 * Date:    01/11, 2015
 */

namespace controllers\user;

use \helpers\session;
use \helpers\url;
use \core\view;
use models\UserManager;


class Auth extends \core\controller {

    public function login() {
        if(Session::get('loggedin')){
            Url::redirect('home');
        }

        $data['title'] = 'Login';

        $manager = new UserManager();

        if (isset($_POST['loginBtn'])) {
            $email    = $_POST['loginMail'];
            $password = $_POST['loginPass'];

            if ($manager->isMailExist($email)) {
                $uid = $manager->getUID($email);

                if($password == $manager->getPassword($uid)) {
                    Session::set('loggedin',    true);
                    Session::set('currentUser', $uid);
                    Url::redirect('home');
                } else {
                    $error = 'Wrong Password !';
                }
            } else {
                $error = "Mail Not Exist !";
            }

            $data['email'] = $email;
        }

        View::rendertemplate('header' ,$data);
        View::render('home/headbar'   ,$data);
        View::render('user/login'     ,$data, $error);
        View::rendertemplate('footer' ,$data);
    }

    public function logout() {
        Session::destroy();
        Url::redirect('login');
    }





}