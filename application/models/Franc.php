<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 06.01.2019
 * Time: 18:47
 */
class Models_franc extends money
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
        return new Models_franc($this->amount * $multiplier);
    }

}