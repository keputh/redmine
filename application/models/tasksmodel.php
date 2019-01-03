<?php
/**
 * Создаем объекты
 * Вытаскиваем их из базы и заносим в массив
 * 
 */
class Models_TasksModel {

	protected $objects;
	
	public function __construct()
	{
		$connect = ["127.0.0.1", "root", "", "big_base"];

		$conny = mysqli_connect($connect[0],$connect[1],$connect[2],$connect[3]);

		$objects = mysqli_query($conny,'Select * from tasks');
		while($data = mysqli_fetch_array($objects)){
	    
			$this->objects[$data['task_id']] = new Task($data);
		}	
	}
	
	public function getObject()
	{
		return $this->objects;
	}	
}


class Task extends Model_DB {

	public $_fields = ['task_id', 'truck', 'status', 'priority', 'topic', 'assigned', 'update', 'tag', 'category',
		'user_id'];
}