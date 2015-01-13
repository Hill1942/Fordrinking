<?php
/**
 *
 * Author:  kaidi - ykdacd@outlook.com
 * Version: 
 * Date:    01/13, 2015
 */

namespace models;


class BlogManager extends \core\model {

    private static $index = 0;


    public function getNextBlog($num) {
        $data = $this->_db->select("select user, content, postDate from ".PREFIX."posts limit :index, :num",
            array(':index' => self::$index,
                  ':num'   => $num));

        self::$index += $num;

        return $data;

    }

}

