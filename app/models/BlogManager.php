<?php
/**
 *
 * Author:  kaidi - ykdacd@outlook.com
 * Version: 
 * Date:    01/13, 2015
 */

namespace models;

use daos\BlogDao;


class BlogManager extends Manager {

    /**
     * @param $num
     * @return array
     */
    public function getNewestBlog($num) {
		$data = BlogDao::getNewestBlog($num);

        return $data;
    }


	/**
	 * @param $index_str
	 * @param $num
	 * @return mixed
     */
	public function getNextBlog($index_str, $num) {
        $index = intval($index_str);

        $data = BlogDao::getNextBlog($index, $num);

        return $data;
    }

}

