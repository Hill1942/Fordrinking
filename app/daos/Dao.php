<?php
/**
 *
 * Author:  kaidi - ykdacd@outlook.com
 * Version: 
 * Date:    01/15, 2015
 */

namespace daos;

use core\database;

class Dao {

    protected static $_db;

    public static function openDB() {
        self::$_db = Database::get();
    }

}