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

		$this->_view->users = (new Models_Create('users', 'user'))->getObject();
		/**
		 * Если нажата кнопка редактируем пользователя и обновляем страницу
		 *
		 *
		 */

		if(isset($_POST['editingUser'])) {
				
			$dataUser = array($_POST['id'], $_POST['Name'], $_POST['Surname'], $_POST['Email'], $_POST['Position']);
			Models_User::edit('users', $dataUser);
			header("Location: /editing");
			exit();
		}

        /**
         * Если нажата кнопка удаляем пользователя и обновляем страницу
         *
         *
         */

		if(isset($_POST['deleteUser'])) {

			Models_User::remove('users', $_POST["id"]);
			header("Location: /editing");
			exit();
		}

        $this->_view->generate('editing.tpl', 'template_view.php');
    }

}
