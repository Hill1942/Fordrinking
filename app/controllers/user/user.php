<?php
/**
 *
 * Author:  kaidi - ykdacd@outlook.com
 * Version: 
 * Date:    01/13, 2015
 */

namespace controllers\user;



use core\Controller;
use helpers\Url;
use helpers\Session;
use models\BlogModel;
use models\UserModel;

class User extends Controller {

    public function post() {
        $blogModel = new BlogModel();
        $userModel = new UserModel();

        $uid       = Session::get("currentUser");
        $user      = $userModel->getUsername($uid);
        $content   = $_POST['content'];
        $avatar    = $userModel->getAvatar($uid);
        $date      = date('y-m-d H:i:s', time());

        $blogModel->postBlog($content, $user);

        echo "<div class='blog-item'>\n";
        echo     "<div class='blog-user'>\n";
        echo         "<img class='post-user-img left' src='$avatar'>\n";
        echo     "</div>\n";
        echo     "<div class='blog-c'>\n";
        echo         "<div class='blog-title'>\n";
        echo             "<div class='blog-username'>$user</div>\n";
        echo             "<div class='blog-date'>$date</div>\n";
        echo         "</div>\n";
        echo         "<div class='blog-body'>\n";
        echo             $content;
        echo         "</div>\n";
        echo         "<div class='blog-footer'>\n";
        echo         "</div>\n";
        echo     "</div>\n";
        echo "</div>\n";
    }
}




