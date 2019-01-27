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
    private $_delete;
    private $_from    = [];
    private $_where   = [];

    public function select(array $fields)
    {
        $this->_fields = $fields;
        return $this;
    }

    public function insert($insert)
    {
        $this->_insert[] = $insert;
        return $this;
    }

    public function replace($replace)
    {
        $this->_replace[] = $replace;
        return $this;
    }

    public function replaceValues(array $values)
    {
        $this->_values = $values;
        $this->_values = "('" .implode("', '", $this->_values). "')";

        return $this;
    }

    public function values(array $values)
    {
        $this->_values = $values;
        $this->_values = "(NULL, '" .implode("', '", $this->_values). "')";

        return $this;
    }

    public function delete($delete = 'del')
    {
        $this->_delete = $delete;
        return $this;
    }

    public function from($table)
    {
        $this->_from[] = $table;
        return $this;
    }

    public function where($condition = null)
    {
        $this->_where[] = $condition;
        return $this;
    }

    public function __toString()
    {

        if ($this->_fields != null or $this->_delete != null) {
            $zapRos = $this->zbor();

            return sprintf(
                $zapRos,
                join(', ', $this->_fields),
                join(', ', $this->_from),
                join(', ', $this->_where)
            );
        }

        if ($this->_insert != null) {

            $zapRos[] = 'INSERT into';
            $zapRos[] = 'VALUES';

            $zapRos = implode($zapRos, " %s ") . " %s";

            return sprintf(
                $zapRos,
                join(', ', $this->_insert),
                $this->_values
            );
        }

        if ($this->_replace != null) {

            $zapRos[] = 'REPLACE into';
            $zapRos[] = 'VALUES';

            $zapRos = implode($zapRos, " %s ") . " %s";

            return sprintf(
                $zapRos,
                join(', ', $this->_replace),
                $this->_values
            );
        }
    }

    private function zbor()
    {
        $zapRos = [];

        /*$sql = [
            [$this->_fields] => 'SELECT',
            [$this->_delete] => 'DELETE',
            '$this->_from'   => 'FROM',
            '$this->_where'  => 'WHERE',
            '$this->_insert' => 'INSERT into',
            '$this->_values' => 'VALUES'
        ];*/

        if ($this->_fields != null) $zapRos[] = 'SELECT';
        if ($this->_delete != null) $zapRos[] = 'DELETE';
        if ($this->_from   != null) $zapRos[] = 'FROM';
        if ($this->_where  != null) $zapRos[] = 'WHERE';
        if ($this->_insert != null) $zapRos[] = 'INSERT into';
        if ($this->_values != null) $zapRos[] = 'VALUES';

        $zapRos = implode($zapRos, " %s ") . " %s";
        return $zapRos;
    }
}