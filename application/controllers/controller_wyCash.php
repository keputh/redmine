<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 06.01.2019
 * Time: 12:26
 */
class Controller_wyCash extends Controller
{

    public $_view;

    function __construct()
    {
        $this->_view = new View();
    }

    function action_index()
    {
        $this->_view->dollar = new model_dollar;
        $this->_view->generate('wyCash.tpl', 'template_view.php');
    }

}