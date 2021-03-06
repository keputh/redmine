<?php
require_once 'connect.php';
require_once 'core/sql.php';
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/registry.php';
require_once 'vendor/autoload.php';
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
require_once 'core/controller.php';
require_once 'core/route.php';
Route::start(); // запускаем маршрутизатор
