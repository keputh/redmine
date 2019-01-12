<?php
class Controller_Main extends Controller
{
	public function action_index()
	{	
		$this->_view->generate('main.tpl', 'template_view.php');
	}
}