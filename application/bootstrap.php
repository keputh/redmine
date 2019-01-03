<?php
require_once 'config.php';
require_once 'core/abstractFactory.php';
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/registry.php';
require_once 'vendor/autoload.php';
require_once 'core/autoload_class.php';
require_once 'core/controller.php';
require_once 'core/route.php';
Route::start(); // запускаем маршрутизатор
?>
