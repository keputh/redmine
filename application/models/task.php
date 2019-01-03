<?php

class Models_Task extends Model_DB {

	public $_fields = ['task_id', 'truck', 'status', 'priority', 'topic', 'assigned', 'update', 'tag', 'category',
		'user_id'];
}