<?php 
class ModelsTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        $conny = Connect::connectDB();
        $conny->query('truncate table users');
        $conny->close();

    }

    protected function _after()
    {

    }

    // tests
    public function testAdd()
    {
        $addUser = Models_User::add('users', ['Дима','Давыденко2','kroops02@gmail.com', 'саппорт']);
        $this->assertEquals('Запрос успешен', $addUser);
        $this->assertEquals('Запрос не успешен', Models_User::edit('users2', ['1',]));
    }

    public function testEdit()
    {
        $editUser = Models_User::edit('users', ['1','Дима','Давыденко2','kroops02@gmail.com', 'саппорт']);
        $this->assertEquals('Запрос успешен', $editUser);
        $this->assertEquals('Запрос не успешен', Models_User::edit('users2', ['1',]));
    }

    public function testRemove()
    {
        Models_User::add('users', ['Дима','Давыденко','kroops02@gmail.com', 'саппорт']);
        $deleteUser = Models_User::remove('users', '1');
        $this->assertEquals('Запрос успешен', $deleteUser);
        $this->assertEquals('Запрос не успешен', Models_User::remove('users2', '1'));
    }
    
}