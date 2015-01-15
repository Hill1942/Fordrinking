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
use models\BlogManager;
use models\UserManager;


class Home extends \core\controller {

	/**
	 * Define Index page title and load template files
	 */
	public function index() {
		if (!Session::get('loggedin')) {
			Url::redirect('login');
		}

		$blogManager = new BlogManager();
		$userManager = new UserManager();


		$data['posts']     = $blogManager->getNewestBlog(5);
		$data['avatar']    = $userManager->getAvatar(Session::get("currentUser"));
		$data['blogIndex'] = 5;

		View::rendertemplate('header', $data);
		View::render('home/headbar', $data);
		View::rendertemplate('framework', $data);
		View::render('home/post', $data);
		View::render('home/blogs', $data);
		View::render('home/sidebar', $data);
		View::rendertemplate('footer', $data);
	}

	public function moreBlogs() {
		$blogManager = new BlogManager();

		$data['posts'] = $blogManager->getNextBlog($_POST['blogIndex'], 5);

		if($data['posts']){
			foreach($data['posts'] as $row){
				echo "<div class='blog-item'>\n";
				echo     "<div class='blog-user'>\n";
				echo         "<img class='post-user-img left' src='$row->avatar'>\n";
				echo     "</div>\n";
				echo     "<div class='blog-c'>\n";
				echo         "<div class='blog-title'>\n";
				echo             "<div class='blog-username'>$row->username</div>\n";
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














