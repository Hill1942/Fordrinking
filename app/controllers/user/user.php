<?php
/**
 *
 * Author:  kaidi - ykdacd@outlook.com
 * Version: 
 * Date:    01/13, 2015
 */

namespace controllers\user;



use helpers\url;
use helpers\Session;

class User extends \core\controller {

    public function post() {

        $model = new \models\user\user();

        $user    = Session::get("currentUser");
        $content = $_POST['content'];
        $date    = date('y-m-d h:i:s',time());
        $avatar  = Url::template_path() . 'assets/img/default-avatar.png';

        $data = array(
            'user'    => $user,
            'content' => $content
        );

        $model->post($data);

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




