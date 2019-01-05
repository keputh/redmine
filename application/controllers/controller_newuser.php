<?php

class Controller_NewUser extends Controller
{

    function __construct()
    {
        $this->_view  = new View();
    }

    function action_index()
    {
        
        /**
         * Если нажата кнопка добаляем пользователя
         *
         *
         */

        if(isset($_POST['buttonAddUser'])) {

            $dataUser = array($_POST['Name'], $_POST['Surname'], $_POST['Email'], $_POST['Position']);
            Models_User::add('users', $dataUser);
            header("Location: /editing");
            exit();
        }

        $this->_view->generate('newUser.tpl', 'template_view.php');
    }

}