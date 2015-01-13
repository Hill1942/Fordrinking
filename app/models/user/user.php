<?php
/**
 *
 * Author:  kaidi - ykdacd@outlook.com
 * Version: 
 * Date:    01/13, 2015
 */

namespace models\user;


class User extends \core\model {

    public function post($data) {
        $this->_db->insert(PREFIX."posts", $data);
    }



}