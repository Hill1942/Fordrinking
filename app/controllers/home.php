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

		$data['title'] = $this->language->get('welcome_text');
		$data['welcome_message'] = $this->language->get('welcome_message');
		
		View::rendertemplate('header', $data);
		View::render('home/headbar', $data);
		View::rendertemplate('footer', $data);
	}

}
