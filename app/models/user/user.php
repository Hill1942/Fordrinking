<?php
/**
 *
 * Author:  kaidi - ykdacd@outlook.com
 * Version: 
 * Date:    01/13, 2015
 */

namespace models\user;


class User extends \core\model {

    private $email;

    private $name;

    private $avatar;

    private $password;

    public function post($data) {
        $this->_db->insert(PREFIX."posts", $data);
    }

    /**
     * Get either a Gravatar URL or complete image tag for a specified email address.
     *
     * @param  int    $s Size in pixels, defaults to 80px [ 1 - 2048 ]
     * @param  string $d Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
     * @param  string $r Maximum rating (inclusive) [ g | pg | r | x ]
     * @return string Url of the avatar
     */
    public function getGravatar($s = 80, $d = 'identicon', $r = 'g' ) {

        $url = 'http://www.gravatar.com/avatar/';
        $url .= md5( strtolower( trim( $this->email ) ) );
        $url .= "?s=$s&d=$d&r=$r";
        // use duoshuo as proxy
        $url = str_replace(array("www.gravatar.com","0.gravatar.com","1.gravatar.com","2.gravatar.com"),"gravatar.duoshuo.com",$url);

        return $url;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }



}