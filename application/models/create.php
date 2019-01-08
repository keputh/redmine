<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 03.01.2019
 * Time: 15:59
 */
/**
 * Создаем объекты
 * Вытаскиваем их из базы и заносим в массив
 *
 */
class Models_Create {

    protected $objects;

    /**
     * Models_Create constructor.
     * @param $table - Название таблицы в базе создаваемого объекта
     * @param $nameClass - Название айди столбца и название создаваемого класса
     */
    public function __construct($table, $nameClass)
    {
        $conny = mysqli_connect("127.0.0.1", "root", "", "big_base");

        $objects = $conny->query('Select * from '. $table .' ');
        while($data = mysqli_fetch_array($objects)){

            $this->objects[$data[$nameClass.'_id']] = $this->create($nameClass, $data);
        }
    }

    public static function create($type, $data)
    {
        switch ($type) {
            case'user':
                return new Models_User($data);
            case'task':
                return new Models_Task($data);
        }
    }

    public function getObject()
    {
        return $this->objects;
    }

}