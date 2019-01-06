<?php 
class MultiplicationTest extends \Codeception\Test\Unit
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
    public function testMultiplication()
    {
        $five = Money::dollar(5);
        $this->assertEquals(new Models_dollar(10), $five->times(2));
        $this->assertEquals(new Models_dollar(15), $five->times(3));
    }

    public function testFrancMultiplication()
    {
        $five = new Models_franc(5);
        $this->assertEquals(new Models_franc(10), $five->times(2));
        $this->assertEquals(new Models_franc(15), $five->times(3));
    }

    public function testEquality()
    {
        $this->assertTrue((new Models_dollar(5))->equals(new Models_dollar(5)));
        $this->assertFalse((new Models_dollar(5))->equals(new Models_dollar(6)));
        $this->assertTrue((new Models_franc(5))->equals(new Models_franc(5)));
        $this->assertFalse((new Models_franc(5))->equals(new Models_franc(6)));
    }

}