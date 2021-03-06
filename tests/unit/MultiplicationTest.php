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
        /*$this->assertEquals(Money::dollar(10), $five->times(2));
        $this->assertEquals(Money::dollar(15), $five->times(3));*/
    }

    public function testFrancMultiplication()
    {
        $five = Money::franc(5);
        /*$this->assertEquals(Money::franc(10), $five->times(2));
        $this->assertEquals(Money::franc(15), $five->times(3));*/
    }

    public function testEquality()
    {
        $this->assertTrue(Money::dollar(5)->equals(Money::dollar(5)));
        $this->assertFalse(Money::dollar(5)->equals(Money::dollar(6)));
        $this->assertTrue(Money::franc(5)->equals(Money::franc(5)));
        $this->assertFalse(Money::franc(5)->equals(Money::franc(6)));
        $this->assertFalse(Money::franc(5)->equals(Money::dollar(5)), 'Ошбика: Франк равен Доллару, такого быть не должно');
    }

    public function testCurrency()
    {
        $this::assertEquals("USD", Money::dollar(1)->currency());
        $this::assertEquals("CHF", Money::franc(1)->currency());
    }

}