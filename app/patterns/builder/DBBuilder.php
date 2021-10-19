<?php

class DBBuilder implements DBInterface
{
    /**
     * @var DB $db instance of DB class
     */
    private DB $db;

    public function __construct()
    {
        $this->create();
    }

    /**
     * create empty DB instance
     * 
     * @return DBBuilder
     */
    public function create(): self
    {
        $this->db = new DB();
        return $this;
    }

    /**
     * set table for query
     * 
     *  @param string $tableName name of table
     *  @return DBBuilder
     */
    public function table(string $tableName): self
    {
        $this->db->table = $tableName;

        return $this;
    }

    /**
     * add where statement
     * 
     *  @param string $field field for where statement
     *  @param string $value value of field
     *  @return DBBuilder
     */
    public function where(string $field, mixed $value): self
    {
        $this->db->where[] = [
            'field' => $field,
            'value' => $value
        ];

        return $this;
    }

    /**
     * set fields to select
     * 
     * @param string ...$fields fields list
     * @return DBBuilder
     */
    public function select(string ...$fields): self
    {
        $this->db->selectFields = $fields;

        return $this;
    }

    public function get(): mixed
    {
        $res = $this->db->get();

        $this->create();

        return $res;
    }
}
