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

	/**
	 *  Записываем объект в базу
	 *
	 * @param string $table - получаем название таблицы
	 * @param array $data - данные которые записываем
	 *
	 */
    public static function add($table, array $data)
    {
		$conny = Connect::connectDB();
		$conny->query("INSERT into ". $table ." values(NULL,". "'" . implode($data, "', '") . "'" .")");
		$conny->close();
		return;
    }

	/**
	 * редактируем объект в базе
	 * @param string $table
	 * @param array $data
	 *
	 */
	public static function edit($table, array $data)
	{
		$conny = Connect::connectDB();
		$conny->query("replace into ". $table ." values(". "'" . implode("', '", $data) . "'" .")");
		$conny->close();
		return;
	}
	
	/**
	 * Удаляем объект
	 *
	 * @param string $table - получаем название таблицы
	 * @param string $id - получаем id объекта
	 *
	 */
	public static function remove($table, $id)
	{
		$conny = Connect::connectDB();
        $conny->query("delete from ". $table ." where user_id = ". $id ." ");
		$conny->close();
		return;
	}

}
