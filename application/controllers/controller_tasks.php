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
        $this->_view->users = (new Models_Create('users', 'user'))->getObject();
        $this->_view->tasks = (new Models_Create('tasks', 'task'))->getObject();
        $this->_view->generate('tasks.tpl', 'template_view.php');
    }

    function action_task($objectid)
    {
        $this->_view->generate('task.tpl', 'template_view.php');
    }

}