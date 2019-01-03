<?php
class View
{

	protected $_data = [];

	public function __set($key, $value)
	{
		$this->_data[$key] = $value;
	}


	/**
	 * Генерируем страницу, получаем все из контроллера
	 *
	 * @param string $content_view - получаем имя файла содержимого страницы, входит в шаблон 
	 * @param string $template_view - получаем имя шаблона вьюшки
	 * @return вся наша любимая страница
	 */
	public function generate($content_view, $template_view)
	{
		$smarty = Registry::get('smarty');

		foreach ($this->_data as $key => $value) {
			$smarty->assign($key, $value);
		}

		include 'application/views/'.$template_view;
	}

}