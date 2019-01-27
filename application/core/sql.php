<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 26.01.2019
 * Time: 13:01
 */
Class sql
{
    private $_fields  = [];
    private $_insert  = [];
    private $_replace = [];
    private $_values  = [];
    private $_delete  = [];
    private $_from    = [];
    private $_where   = [];

    /**
     * @param array $fields - Получаем массив столбцов
     * @return $this
     */
    public function select(array $fields)
    {
        $this->_fields = $fields;
        return $this;
    }

    /**
     * @param $table - получаем название таблицы
     * @return $this
     */
    public function insert($table)
    {
        $this->_insert[] = $table;
        return $this;
    }

    /**
     * @param $table - получаем название таблицы
     * @return $this
     */
    public function replace($table)
    {
        $this->_replace[] = $table;
        return $this;
    }

    /**
     * @param array $values получаем данные которые необходимо внести
     * @return $this
     */
    public function Values(array $values)
    {
        $this->_values = $values;
        $this->_values = "('" .implode("', '", $this->_values). "')";
        return $this;
    }

    /**
     * костыльная функция insertValues так как в начале null
     * @param array $values получаем данные которые необходимо внести
     * @return $this
     */
    public function insertValues(array $values)
    {
        $this->_values = $values;
        $this->_values = "(NULL, '" .implode("', '", $this->_values). "')";
        return $this;
    }

    /**
     *
     * @return $this
     */
    public function delete()
    {
        $this->_delete[] = 'del';
        return $this;
    }

    /**
     * @param $table - получаем название таблицы
     * @return $this
     */
    public function from($table)
    {
        $this->_from[] = $table;
        return $this;
    }

    /**
     * @param $condition
     * @return $this
     */
    public function where($condition)
    {
        $this->_where[] = $condition;
        return $this;
    }

    /**
     * собираем запрос
     * @return string возвращаем полноценный собранный запрос в базу
     */
    public function __toString()
    {
        $rawQuery = $this->gather();
        return $stringQuery = $this->query($rawQuery);
    }

    /**
     * Генерируем основу под запрос
     * @return string возвращаем строку формата ***** %s ***** %s ***** %S
     */
    private function gather()
    {
        $query = [];

        //если переменная не пуста то добавляем string в масссив
        if ($this->_fields  != null) $query[] = 'SELECT';
        if ($this->_delete  != null) $query[] = 'DELETE';
        if ($this->_insert  != null) $query[] = 'INSERT into';
        if ($this->_replace != null) $query[] = 'REPLACE into';
        if ($this->_from    != null) $query[] = 'FROM';
        if ($this->_where   != null) $query[] = 'WHERE';
        if ($this->_values  != null) $query[] = 'VALUES';

        return $query = implode($query, " %s ") . " %s";
    }

    /**
     * @param string $rawQuery - строка вида ***** %s ***** %s ***** %S
     * @return string - возвращаем готовый запрос в базу
     */
    private function query($rawQuery)
    {
        if ($this->_fields != null or $this->_delete != null) {

            //собираем строку вида "select * from таблица where" или "delete from таблица where"
            return sprintf($rawQuery,
                join(', ', $this->_fields),
                join(', ', $this->_from),
                join(', ', $this->_where)
            );
        }

        if ($this->_insert != null) {

            //собираем строку вида "insert into таблица value (null, '')"
            return sprintf(
                $rawQuery,
                join(', ', $this->_insert),
                $this->_values
            );
        }

        if ($this->_replace != null) {

            //собираем строку вида "replace into таблица value (null, '')"
            return sprintf(
                $rawQuery,
                join(', ', $this->_replace),
                $this->_values
            );
        }
    }

}