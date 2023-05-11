<?php

namespace Helios\Database;

use PDO;

class Connection
{
    private $pdo;

    public function connectionDatabase() : PDO
    {
        try {
            $this->pdo = new PDO('mysql:host='.getenv('LOCALHOST').';dbname='.getenv('DBNAME'), getenv('USER'), getenv('PASSWORD'), [
            PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
        return $this->pdo;
        } catch (\PDOException $e) {
            throw $e->getMessage();
        }
    }
}
