<?php

class Controller_Tasks extends Controller
{

    public $_view;

    function __construct()
    {
        $this->_view = new View();
    }

    function action_index()
    {
        /**
         * Создаем объекты
         *
         *  array $users - все пользователи
         *  array $tasks - все задачи
         */


        $this->_view->users = (new Models_Class_UsersModel)->getObject();
        $this->_view->tasks = (new Models_Class_TasksModel)->getObject();
        

        $this->_view->generate('tasks.tpl', 'template_view.php');
    }

    function action_task($objectid)
    {
        $tasks = (new Models_Class_TasksModel)->getObject();

        $this->_view->task = $tasks[$objectid];

        $this->_view->generate('task.tpl', 'template_view.php');
    }

}