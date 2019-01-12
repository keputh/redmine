<?php

class Models_Task extends Model_DB {

	protected $_fields = ['task_id', 'truck', 'statusTask', 'priority', 'topic', 'assigned', 'updateDate', 'tag', 
		'category', 'user_id'];

	public function __construct($data)
	{
		foreach ($this->_fields as $field) {
			if (!empty($data[$field])) {
				$this->_data[$field] = $data[$field];
			}
		}
	}
}