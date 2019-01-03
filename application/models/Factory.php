<?php

class Models_Factory extends FactoryAbstract
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