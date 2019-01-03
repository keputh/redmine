<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 16.12.2018
 * Time: 11:50
 */

class Registry {

    private static $_objects = [];

    public static function set($key, $value)
    {
        self::$_objects[$key] = $value;
    }

    public static function get($key)
    {
        if (empty(self::$_objects[$key])) {
            throw new Exception('We don\t have '. $key .'object');
        }
        return self::$_objects[$key];
    }

}