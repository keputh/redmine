<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 05.01.2019
 * Time: 14:29
 */
require_once 'C:\Users\Дмитрий\Desktop\программирование\OSPanel\domains\redmine\application\core\abstractFactory.php';
require_once 'C:\Users\Дмитрий\Desktop\программирование\OSPanel\domains\redmine\application/core/model.php';
require_once 'C:\Users\Дмитрий\Desktop\программирование\OSPanel\domains\redmine\application/core/view.php';
include 'C:\Users\Дмитрий\Desktop\программирование\OSPanel\domains\redmine\application/core/registry.php';
require_once 'C:\Users\Дмитрий\Desktop\программирование\OSPanel\domains\redmine\vendor/autoload.php';
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
require_once 'C:\Users\Дмитрий\Desktop\программирование\OSPanel\domains\redmine\application/core/controller.php';
require_once 'C:\Users\Дмитрий\Desktop\программирование\OSPanel\domains\redmine\application/core/route.php';