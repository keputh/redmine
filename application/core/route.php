<?php
class Route
{
	public static function start()
	{
		// контроллер и действие по умолчанию
		$controller_name = 'Main';
		$action_name     = 'index';
		$objectid;
		$routes          = explode('/', $_SERVER['REQUEST_URI']);

		$smarty = new Smarty();
		Registry::set('smarty', $smarty);

		// получаем имя контроллера
		if ( !empty($routes[1]) ) {	
			$controller_name = $routes[1];
		}
		
		// получаем имя экшена
		if ( !empty($routes[2]) ) {
			$action_name = $routes[2];
		}

		if (!empty($routes[3])) {
			$objectid = $routes[3];
		}


		// добавляем префиксы
		$controller_name = 'Controller_'.$controller_name;
		$action_name     = 'action_'.$action_name;
		
		// подцепляем файл с классом контроллера
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "application/controllers/".$controller_file;
		if(file_exists($controller_path)) {
			include "application/controllers/".$controller_file;
		}
		else {
			/*
			правильно было бы кинуть здесь исключение,
			но для упрощения сразу сделаем редирект на страницу 404
			*/
			Route::ErrorPage404();
		}
		
		// создаем контроллер
		$controller = new $controller_name;
		$action     = $action_name;
		
		if(method_exists($controller, $action)) {
			// вызываем действие контроллера
			$controller->$action($objectid);
		}
		else
		{
			// здесь также разумнее было бы кинуть исключение
			Route::ErrorPage404();
		}
	}

	function ErrorPage404() {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
    }
}
?>