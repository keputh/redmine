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
		$query = (new sql())
			->insert($table)
			->values($data);

		$conny->query($query);
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
		$query = (new sql())
			->replace($table)
			->replaceValues($data);
		
		$conny->query($query);
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
		$query = (new sql())
			->delete()
			->from($table)
		    ->where('user_id = '. $id);

		$conny->query($query);
		$result = Connect::infoConnect($conny->affected_rows);
		$conny->close();
		return $result;
	}

}
