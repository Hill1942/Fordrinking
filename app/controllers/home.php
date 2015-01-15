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

		//$model = new \models\blogManager();

		//$data['posts'] = $model->getNewestBlog(5);

		$data['blogIndex'] = 5;

		View::rendertemplate('header', $data);
		View::render('home/headbar', $data);
		//View::rendertemplate('framework', $data);
		//View::render('home/post', $data);
		//View::render('home/blogs', $data);
		//View::render('home/sidebar', $data);
		View::rendertemplate('footer', $data);
	}

	public function moreBlogs() {

		$model = new \models\blogManager();

		$data['posts'] = $model->getNextBlog(5);
		$avatar  = Url::template_path() . 'assets/img/default-avatar.png';

		if($data['posts']){
			foreach($data['posts'] as $row){
				echo "<div class='blog-item'>\n";
				echo     "<div class='blog-user'>\n";
				echo         "<img class='post-user-img left' src='$avatar'>\n";
				echo     "</div>\n";
				echo     "<div class='blog-c'>\n";
				echo         "<div class='blog-title'>\n";
				echo             "<div class='blog-username'>$row->user</div>\n";
				echo             "<div class='blog-date'>$row->postDate</div>\n";
				echo         "</div>\n";
				echo         "<div class='blog-body'>\n";
				echo         $row->content;
				echo         "</div>\n";
				echo         "<div class='blog-footer'>\n";
				echo         "</div>\n";
				echo     "</div>\n";
				echo "</div>\n";
			}
		}
	}

}














