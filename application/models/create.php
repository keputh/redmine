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
        $conny = Connect::connectDB();
        $query = (new sql())
               ->select(['*'])
               ->from($table);
        
        $objects = $conny->query($query);
        while($data = mysqli_fetch_array($objects)){

            $this->objects[$data[$nameClass.'_id']] = $this->create($nameClass, $data);
        }
        $conny->close();
    }
    
    public function getObject()
    {
        return $this->objects;
    }

    private function create($type, $data)
    {
        switch ($type) {
            case'user':
                return new Models_User($data);
            case'task':
                return new Models_Task($data);
        }
    }

}