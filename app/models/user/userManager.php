<?php
/**
 *
 * Author:  kaidi - ykdacd@outlook.com
 * Version: 
 * Date:    01/13, 2015
 */

namespace models\user;


class UserManager extends \core\model {

    public function isMailExist($mail) {
        $data = $this->_db->select("select email from ".PREFIX."members where email = :email",
            array(':email' => $mail));
        if (count($data) == 0) {
            return false;
        } else {
            return true;
        }
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

    public function getPassword($username) {

        $data = $this->_db->select("select password from ".PREFIX."members where username = :username",
            array(':username' => $username));
        return $data[0]->password;
    }

    public function addUser($data) {
        $this->_db->insert(PREFIX."members", $data);
    }

    public function updateUser($data, $where) {
        $this->_db->update(PREFIX."members",$data, $where);
    }

}