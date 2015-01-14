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


class Auth extends \core\controller {

    public function login() {

        if(Session::get('loggedin')){
            Url::redirect('home');
        }

        $data['title'] = 'Login';

        $model = new \models\user\userManager();


        if (isset($_POST['loginBtn'])) {
            $username = $_POST['loginName'];
            $password = $_POST['loginPass'];

            if ($model->isUserExist($username)) {

                if($password == $model->getPassword($username)){
                    Session::set('loggedin',    true);
                    Session::set('currentUser', $username);
                    Session::set('blogIndex',   0);
                    Url::redirect('home');
                } else {
                    $error = 'Wrong Password !';
                }
            } else {
                $error = "User Not Exist !";
            }
            $data['user'] = $username;
        }


        View::rendertemplate('header', $data);
        View::render('home/headbar', $data);
        View::render('user/login', $data, $error);
        View::rendertemplate('footer',$data);



    }

    public function logout() {
        Session::destroy();
        Url::redirect('login');
    }





}