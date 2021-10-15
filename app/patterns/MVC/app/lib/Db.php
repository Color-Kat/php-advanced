<?php

namespace app\lib;

class Db
{
    protected $db;

    public function __construct()
    {
        $config = require APP . '/config/db.php';

        extract($config);

        $dns = $config['driver'] .
            ':host=' . $config['host'] .
            ((!empty($config['port'])) ? (';port=' . $config['port']) : '') .
            ';dbname=' . $config['dbname'];

        echo $dns;

        $this->db = new \PDO($dns, $config['user'], $config['password']);
    }
}
