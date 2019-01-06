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

    /**
     * 5$ + 10chf = 10$, если курс обмена 2:1
     * 5$  * 2 = 10$ - "завершен"
     *
     */

    // tests
    public function testMultiplication()
    {
        $five = new models_dollar(5);
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);
        $product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }

    public function testEquality()
    {
       $this->assertTrue((new models_dollar(5))->equals(new Models_dollar(5)));
       $this->assertFalse((new models_dollar(5))->equals(new Models_dollar(6)));
    }

}