<?php

class DB
{

    public string $table;
    public array $selectFields = [];
    public array $where = [];

    public function get(): mixed
    {
        $sql = '';

        $selectFieldsStr = '*';

        if (!empty($this->selectFields)) {
            $selectFieldsStr = '';

            foreach ($this->selectFields as $field) {
                $selectFieldsStr .= $field . ',';
            }

            $selectFieldsStr = trim($selectFieldsStr, ",");
        }

        $sql = "SELECT $selectFieldsStr FROM {$this->table}";

        if (!empty($this->where)) {
            $sql .= " WHERE ";

            foreach ($this->where as $where) {
                $sql .= $where['field'] . '=' . $where['value'] . ' AND ';
            }

            $sql = trim($sql, " AND ");
        }

        return $sql;
    }
}
