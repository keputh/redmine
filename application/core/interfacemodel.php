<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 28.12.2018
 * Time: 23:24
 */
interface Model
{
    public static function add($table, array $data);
    public static function edit($table, array $data);
    public static function remove($table, $id);
}
