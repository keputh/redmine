<?php

class Controller_Task extends Controller
{

    function __construct()
    {
        $this->_view  = new View();
    }

    function action_index()
    {


        $this->_view->generate('task.tpl', 'template_view.php');
    }

}