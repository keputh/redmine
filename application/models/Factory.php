<?php

class Models_Factory extends FactoryAbstract
{
    /**
     * @param $type - имя создаваемого объекта
     * @param $data - данные которые необходимо передать в создаваемый объект
     * @return Models_Task|Models_User
     */
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