<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 06.01.2019
 * Time: 19:35
 */
abstract class Money
{

    protected $amount;
    
    public static function dollar($amount)
    {
        return new Models_dollar($amount);
    }

    abstract public function times($multiplier);

    public function equals($object)
    {
        $money = $object;
        return $this->amount == $money->amount;
    }

}