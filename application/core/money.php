<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 06.01.2019
 * Time: 19:35
 */
class Money
{

    protected $_amount;
    protected $_currency;

    public function __construct($amount, $currency)
    {
        $this->_amount = $amount;
        $this->_currency = $currency;
    }
    
    public static function dollar($amount)
    {
        return new Models_dollar($amount, 'USD');
    }

    public static function franc($amount)
    {
        return new Models_franc($amount, 'CHF');
    }

    public function times($multiplier)
    {
        return new Money($this->_amount * $multiplier, $this->_currency);
    }

    public function equals($object)
    {
        $money = $object;
        return $this->_amount == $money->_amount && $this->_currency == $money->_currency;
    }

    /**
     * @return mixed возвращаем название валюты
     */
    public function currency()
    {
        return $this->_currency;
    }

}