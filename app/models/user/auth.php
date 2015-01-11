<?php
/**
 *
 * Author:  kaidi - ykdacd@outlook.com
 * Version: 0.1
 * Date:    01/11, 2015
 */

namespace models\user;


class Auth extends \core\model {

    public function getHash($username) {

        $data = $this->_db->select("select password from ".PREFIX."members where username = :userame",
                                   array(':username =>username'));
        return $data[0]->password;
    }

}