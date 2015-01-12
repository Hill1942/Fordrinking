<?php namespace controllers;

/*
 * Welcome controller
 *
 * @author David Carr - dave@daveismyname.com - http://www.daveismyname.com
 * @version 2.1
 * @date June 27, 2014
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
