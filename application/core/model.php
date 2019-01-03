<?php
include 'interfacemodel.php';

class Model_DB implements Model
{	
    public $_data = [];
	public $objects;


	public function __construct($data) 
	{
		foreach ($this->_fields as $field) {
			if (!empty($data[$field])) {
		        $this->_data[$field] = $data[$field];
			}
	    }
	}

	public function getAll()
	{
		return $this->objects;
	}

	/**
	 *  Записываем объект в базу
	 *
	 * @param string $table
	 * @param array $data
	 * 
	 * @return mysql_query(insert) запись в базу 
	 */
    public static function add($table, array $data)
    {
		$conny = mysqli_connect("127.0.0.1", "root", "", "big_base");
        $str = "'" . implode("', '", $data) . "'";
		return $conny->query("insert into ". $table ." values(". $str .")");
    }

	/**
	 * редактируем объект в базе
	 *
	 * @param string $table
	 * @param array $data
	 * 
	 * @return mysql_query(replace) перезапись объекта
	 */
	public function edit($table, array $data)
	{
		$conny = mysqli_connect("127.0.0.1", "root", "", "big_base");
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
	public function remove($table, $id)
	{
		$conny = mysqli_connect("127.0.0.1", "root", "", "big_base");
        return $conny->query("delete from ". $table ." where user_id = ". $id ." ");
	}

}
