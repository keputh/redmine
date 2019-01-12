<?php

class Models_User extends Model_DB {

	public $_data = [];
	protected  $_fields = ['user_id', 'name', 'surname', 'email', 'position'];

	public function __construct($data)
	{
		foreach ($this->_fields as $field) {
			if (!empty($data[$field])) {
				$this->_data[$field] = $data[$field];
			}
		}
	}
}