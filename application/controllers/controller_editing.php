<?php

class Controller_Editing extends Controller
{
	public $_view;

    function __construct()
    {
		$this->_view = new View();
    }

    function action_index()
    {
		$users = (new Models_Class_UsersModel)->getObject();
		$this->_view->users = $users;

		/**
		 * Если нажата кнопка редактируем пользователя и обновляем страницу
		 *
		 *
		 */

		if(isset($_POST['editingUser'])) {
				
			$dataUser = array($_POST['Name'], $_POST['Surname'], $_POST['Email'], $_POST['Position']);
			$users[$_POST['id']]::edit('users', $dataUser);
			header("Location: /editing");
			exit();
		}

        /**
         * Если нажата кнопка удаляем пользователя и обновляем страницу
         *
         *
         */

		if(isset($_POST['deleteUser'])) {
				
			$users[$_POST['id']]::remove('users', $_POST["id"]);
			header("Location: /editing");
			exit();
		}

        $this->_view->generate('editing.tpl', 'template_view.php');
    }

}
