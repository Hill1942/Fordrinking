<?php
/**
 *
 * Author:  kaidi - ykdacd@outlook.com
 * Version: 0.1
 * Date:    01/11, 2015
 */

namespace models\user;


class Auth extends \core\model {

    public function getPassword($username) {

        $data = $this->_db->select("select password from ".PREFIX."members where username = :username",
                                   array(':username' => $username));
        return $data[0]->password;
    }

    public function isUserExist($username) {
        $data = $this->_db->select("select username from ".PREFIX."members where username = :username",
                                   array(':username' => $username));
        if (count($data) == 0) {
            return false;
        } else {
            return true;
        }
    }

}