<?php

class Models_dollar extends Money
{
    
    /**
     * Models_dollar constructor.
     * @param $amount - получаем цену акции
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param $multiplier - умножаем цену одной акции на количество акций
     * @return Models_dollar - возвращаем новый объект цены всех акций
     */
    public function times($multiplier)
    {
        return new Models_dollar($this->amount * $multiplier);
    }

}