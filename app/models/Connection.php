<?php

namespace app\models;

abstract class Connection
{

    private $dbname = 'mysql:host=localhost;dbname=cursomvc';
    private $user = 'root';
    private $password = '2909';

    protected function connect()
    {
        try {
            $conn = new \PDO($this->dbname, $this->user, $this->password);
            $conn->exec("set names utf8");
            return $conn;
        } catch (\PDOException $error) {
            echo $error->getMessage();
        }
    }
}
