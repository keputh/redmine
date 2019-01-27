<?php 
class sqlTest extends \Codeception\Test\Unit
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
    public function testSelectSQL()
    {
        $query = (new sql())
            ->select(['foo', 'bar'])
            ->from('foobar')
            ->where('f.bar = ?');

        $this->assertSame('SELECT foo, bar FROM foobar WHERE f.bar = ?', (string)$query);
    }

    public function testDeleteSQL()
    {
        $queryDelete = (new sql())
            ->delete()
            ->from('foobar')
            ->where('f.bar = ?');

        $this->assertSame('DELETE  FROM foobar WHERE f.bar = ?', (string) $queryDelete);
    }

    public function testInsertSQL()
    {
        $queryInsert = (new sql())
            ->insert ('foobar')
            ->insertValues (['Привет','Пока']);

        $this->assertSame("INSERT into foobar VALUES (NULL, 'Привет', 'Пока')",(string) $queryInsert);
    }

    public function testReplaceSQL()
    {
        $queryInsert = (new sql())
            ->replace ('foobar')
            ->Values (['3', 'Привет', 'Пока']);

        $this->assertSame("REPLACE into foobar VALUES ('3', 'Привет', 'Пока')",(string) $queryInsert);
    }
}