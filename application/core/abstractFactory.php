<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 03.01.2019
 * Time: 16:00
 */
abstract class FactoryAbstract
{
    abstract public function create($type, $data);
}