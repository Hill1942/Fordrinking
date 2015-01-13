<?php namespace controllers;

/**
 *
 * Author:  kaidi - ykdacd@outlook.com
 * Version: 0.1
 * Date:    01/11, 2015
 */

use core\view;
use helpers\session;
use helpers\url;


class Home extends \core\controller {

	/**
	 * Define Index page title and load template files
	 */
	public function index() {

		if (!Session::get('loggedin')) {
			Url::redirect('login');
		}

		$model = new \models\blogManager();

		$data['posts'] = $model->getNextBlog(20);
		
		View::rendertemplate('header', $data);
		View::render('home/headbar', $data);
		View::rendertemplate('framework', $data);
		View::render('home/post', $data);
		View::render('home/blogs', $data);
		View::render('home/sidebar', $data);
		View::rendertemplate('footer', $data);
	}

}














