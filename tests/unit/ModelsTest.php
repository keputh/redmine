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
    public function testAdd()
    {
        $data = [];
        Model_DB::add('users', $data);
    }

    public function testEdit()
    {
        $data = [];
        Model_DB::edit('users', $data);

        $dataTask = [];
        Model_DB::edit('tasks', $dataTask);

    }

    public function testRemove()
    {
        $id = '';
        Model_DB::remove('users', $id);
        Model_DB::remove('tasks', $id);
    }
    
}