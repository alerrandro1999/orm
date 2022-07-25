<?php

namespace Alerr\Orm\Database;

class Connection
{
    protected $pdo;

    public function connectionDatabase() : \PDO
    {
        try {
            $this->pdo = new \PDO('mysql:host='.getenv('LOCALHOST').';dbname='.getenv('DBNAME'), getenv('USER'), getenv('PASSWORD'));
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $this->pdo;
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
}
