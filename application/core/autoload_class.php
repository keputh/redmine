<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 03.01.2019
 * Time: 16:15
 */
spl_autoload_register(function($className) {
    $classParts = explode('_',$className);

    $path = __DIR__;
    foreach ($classParts as $part) {
        $path .= '/'. $part;
    }
    $path .= '.php';

    if (is_file($path)) {
        include $path;
    }

});