<?php
/**
 * User: kaidi
 * Date: 01/11, 2015
 * Time: 21:51
 */

namespace models;


class Auth extends \core\model {

    public function getHash($username) {

        $data = $this->_db->select("select password from ".PREFIX."members where username = :userame",
                                   array(':username =>username'));
        return $data[0]->password;
    }

}