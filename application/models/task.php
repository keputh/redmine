<?php

class Models_Task extends Model_DB {

	public $_fields = ['task_id', 'truck', 'statusTask', 'priority', 'topic', 'assigned', 'updateDate', 'tag', 'category',
		'user_id'];
}