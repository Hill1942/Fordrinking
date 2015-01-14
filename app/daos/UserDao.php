<?php
/**
 *
 * Author:  kaidi - ykdacd@outlook.com
 * Version: 
 * Date:    01/14, 2015
 */

namespace daos;

use core\database;


class UserDao {

    private $_db;

    public function __construct() {
        $this->_db = Database::get();
    }

    public function getEmail($uid) {
        $data = $this->_db->select("select email from fd_users where uid = :uid",
            array(':uid' => $uid));

        return $data;
    }


    public function getUsername($uid) {
        $data = $this->_db->select("select username from fd_users where uid = :uid",
            array(':uid' => $uid));

        return $data;
    }

    public function getPassword($uid) {

        $data = $this->_db->select("select password from fd_users where uid = :uid",
            array(':uid' => $uid));
        return $data;
    }

    public function addUser($data) {
        $this->_db->insert(PREFIX."members", $data);
    }

    public function updateUser($data, $where) {
        $this->_db->update(PREFIX."members",$data, $where);
    }
}