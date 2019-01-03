<?php
/**
 * Создаем объекты
 * Вытаскиваем их из базы и заносим в массив
 * 
 */
class Models_UsersModel {

	protected $objects;

	public function __construct()
	{
		$conny = mysqli_connect("127.0.0.1", "root", "", "big_base");

		$objects = $conny->query('Select * from users');
		while($data = mysqli_fetch_array($objects)){

			$this->objects[$data['user_id']] = new User($data);
		}
	}

	public function getObject()
	{
		return $this->objects;
	}
}

class User extends Model_DB {

	public $_fields = ['user_id', 'name', 'surname', 'email', 'position'];
}