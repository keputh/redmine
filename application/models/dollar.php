<?php

class Models_dollar {

    public $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times($multiplier)
    {
        return new Models_dollar($this->amount * $multiplier);
    }

    public function equals($object)
    {
        $dollar = $object;
        return $this->amount == $dollar->amount;
    }

}