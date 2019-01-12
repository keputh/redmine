<?php
include 'interfaceModel.php';

class Model_DB implements Model
{
	protected $_fields  = [];
	
	/**
	 * @param $table
	 * @param array $data
	 * @return string
	 */
    public static function add($table, array $data)
    {
		$conny = Connect::connectDB();
		$conny->query("INSERT into ". $table ." values(NULL,". "'" . implode($data, "', '") . "'" .")");
        $result = Connect::infoConnect($conny->affected_rows);
		$conny->close();
		return $result ;
    }

	/**
	 * @param $table
	 * @param array $data
	 * @return string
	 */
	public static function edit($table, array $data)
	{
		$conny = Connect::connectDB();
		$conny->query("replace into ". $table ." values(". "'" . implode("', '", $data) . "'" .")");
		$result = Connect::infoConnect($conny->affected_rows);
		$conny->close();
		return $result ;
	}

	/**
	 * @param $table
	 * @param $id
	 * @return string
	 */
	public static function remove($table, $id)
	{
		$conny = Connect::connectDB();
		$conny->query("delete from ". $table ." where user_id = ". $id ." ");
		$result = Connect::infoConnect($conny->affected_rows);
		$conny->close();
		return $result ;
	}

}
