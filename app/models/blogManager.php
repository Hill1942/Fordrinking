<?php
/**
 *
 * Author:  kaidi - ykdacd@outlook.com
 * Version: 
 * Date:    01/13, 2015
 */

namespace models;

use helpers\session;


class BlogManager extends \core\model {

    //private static $index = 5;


    /**
     * @param $num
     * @return array
     */
    public function getNewestBlog($num) {

        $data = $this->_db->select("
			SELECT
				".PREFIX."posts.user,
				".PREFIX."posts.content,
				".PREFIX."posts.postDate,
				".PREFIX."members.avatar
			FROM
				".PREFIX."posts,
				".PREFIX."members
			WHERE
				".PREFIX."posts.user = ".PREFIX."members.username
			ORDER BY
				pid DESC "."limit :num",
            array(':num' => $num));

        return $data;
    }

    /**
     * @param $num
     * @return array
     */
    public function getNextBlog($num) {

        $index = intval($_POST['blogIndex']);

        $data = $this->_db->select("
			SELECT
				".PREFIX."posts.user,
				".PREFIX."posts.content,
				".PREFIX."posts.postDate,
				".PREFIX."members.avatar
			FROM
				".PREFIX."posts,
				".PREFIX."members
			WHERE
				".PREFIX."posts.user = ".PREFIX."members.username
			ORDER BY
				pid DESC "."limit :index, :num",
            array(':num'   => $num,
                  ':index' => $index));

        return $data;

    }

}

