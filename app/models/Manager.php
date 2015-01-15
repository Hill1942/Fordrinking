<?php
/**
 *
 * Author:  kaidi - ykdacd@outlook.com
 * Version: 
 * Date:    01/15, 2015
 */

namespace models;

use daos\UserDao;

class Manager {

    public function __construct() {
        UserDao::openDB();
    }
}