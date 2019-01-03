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

    public function __construct()
    {
        $connect = ["127.0.0.1", "root", "", "big_base"];

        $conny = mysqli_connect($connect[0],$connect[1],$connect[2],$connect[3]);

        $objects = $conny->query('Select * from users');
        while($data = mysqli_fetch_array($objects)){

            $factory = new Models_Factory();
            $this->objects[$data['task_id']] = $factory->create('user');
        }
    }

    public function getObject()
    {
        return $this->objects;
    }
}