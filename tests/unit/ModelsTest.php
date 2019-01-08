<?php 
class ModelsTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testUser()
    {
        $data = ['nameTest','surnameTest','email@mail.com','tester'];
        Models_User::add('users', $data);
        $data = ['82','nameTest2','surnameTest','email@mail.com','tester'];
        Models_User::edit('users', $data);
        $id = '82';
        Models_User::remove('users', $id);
    }

    public function testTask()
    {
        $data = ['truck', 'statusTask', 'priority', 'topic', 'assigned', 'updateDate', 'tag', 'category', 'user_id'];
        Models_Task::add('tasks', $data);
        $data = ['82', 'truck2', 'statusTask', 'priority', 'topic', 'assigned', 'updateDate', 'tag', 'category', 'user_id'];
        Models_Task::edit('tasks', $data);
        $id = '82';
        Models_Task::remove('tasks', $id);
    }
}