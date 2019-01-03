<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 03.01.2019
 * Time: 16:00
 */
abstract class FactoryAbstract
{

    public function create($type, $data)
    {
        switch ($type) {
            case'user':
                return new Models_User($data);
            case'task':
                return new Models_Task($data);
        }
    }

}