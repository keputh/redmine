<?php

class Controller_Editing extends Controller
{

    public function action_index()
    {
		$this->_view->users = (new Models_Create('users', 'user'))->getObject();

		//Если нажата кнопка редактируем пользователя и обновляем страницу
		if(isset($_POST['editingUser'])) {
			
			Models_User::edit('users', [$_POST['id'], $_POST['Name'], $_POST['Surname'], $_POST['Email'], $_POST['Position']]);
			header("Location: /editing");
			exit();
		}

		//Если нажата кнопка удаляем пользователя и обновляем страницу
		if(isset($_POST["del"])) {
			$result = Models_User::remove('users', $_POST["del"]);

			if ($result) {
				echo 'Пользователь успешно удален';
				exit();
			}

			else{
			    echo 'Удаление не произошло';
			    exit();
			}
		}


        return $this->_view->generate('editing.tpl', 'template_view.php');
    }

}
