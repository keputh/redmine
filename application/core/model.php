<?php
include 'interfaceModel.php';

class Model_DB implements Model
{	
    public $_data = [];

	public function __construct($data) 
	{
		foreach ($this->_fields as $field) {
			if (!empty($data[$field])) {
		        $this->_data[$field] = $data[$field];
			}
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

	/**
	 *  Записываем объект в базу
	 *
	 * @param string $table
	 * @param array $data
	 * 
	 * @return mysqli_query(insert) запись в базу
	 */
    public static function add($table, array $data)
    {
		$conny = new mysqli("127.0.0.1", "root", "", "big_base");
        $str = "'" . implode($data, "', '") . "'";
		return $conny->query("INSERT into ". $table ." values(NULL,". $str .")");
    }

	/**
	 * редактируем объект в базе
	 * @param string $table
	 * @param array $data
	 * 
	 * @return mysql_query(replace) перезапись объекта
	 */
	public static function edit($table, array $data)
	{
		$conny = new mysqli("127.0.0.1", "root", "", "big_base");
		$str = "'" . implode("', '", $data) . "'";
		return $conny->query("replace into ". $table ." values(". $str .")");
	}
	
	/**
	 * Удаляем объект
	 *
	 * @param string $table - получаем название таблицы
	 * @param string $id - получаем id объекта
	 *
	 * @return mysql_query(delete) удаляем объект из базы
	 */
	public static function remove($table, $id)
	{
		$conny = new mysqli("127.0.0.1", "root", "", "big_base");
        return $conny->query("delete from ". $table ." where user_id = ". $id ." ");
	}

}
