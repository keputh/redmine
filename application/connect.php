<?php
Class Connect
{
    /**
     * @return mysqli - Подключаемся к базе
     */
    public static function connectDB()
    {
        return new mysqli("127.0.0.1", "root", "", "big_base");
    }

    /**
     * Проверяем произошли ли какие либо изменения в базе
     * @param $i - получаем функцию проверяющую изменения в базе
     * @return string - успех, если есть изменения в базе
     */
    public static function infoConnect($i)
    {
        if($i > 0) {
            return 'Запрос успешен';
        }

        else {
            return 'Запрос не успешен';
        }
    }
}
