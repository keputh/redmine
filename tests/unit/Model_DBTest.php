<?php 
class Model_DBTest extends \Codeception\Test\Unit
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

    public function testSuccessModel_DB()
    {
        $data = ['test', 'test', 'test', 'test'];
        Model_DB::add('users', $data);
        
    }
    
}