<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 05.01.2019
 * Time: 14:29
 */

$cd = 'C:\Users\Дмитрий\Desktop\программирование\OSPanel\domains\redmine\application/';
include 'connect.php';
require_once $cd .'core/model.php';
require_once $cd .'core/money.php';
require_once $cd .'core/view.php';
include      $cd .'core/registry.php';

spl_autoload_register(function($className) {
    $classParts = explode('_',$className);

    $path = 'C:\Users\Дмитрий\Desktop\программирование\OSPanel\domains\redmine\application/';
    foreach ($classParts as $part) {
        $path .= '/'. $part;
    }
    $path .= '.php';

    if (is_file($path)) {
        include $path;
    }
});

require_once $cd .'core/controller.php';
require_once $cd .'controllers/controller_tasks.php';
require_once $cd .'core/route.php';

