<?php
/**
 * Created by PhpStorm.
 * User: kaidi
 * Date: 14-12-8
 * Time: 22:52
 */

include __SITE_PATH . '/core/' . 'controller_base.php';

include __SITE_PATH . '/core/' . 'router.php';

include __SITE_PATH . '/core/' . 'template.php';






function __autoload($class_name) {
    $filename = strtolower($class_name) . '.class.php';
    $file = __SITE_PATH . '/model' . $filename;
    if (file_exists($file) == false) {
        return false;
    }
    include ($file);
}
