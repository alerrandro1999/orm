<?php

namespace Helios\Entity;

use Helios\Interface\IModel;
use Helios\Database\Connection;
use PDO;
use stdClass;

class Model implements IModel
{
    protected static $connection;

    public function __construct(Connection $connection)
    {
        self::$connection = $connection;
    }

    public static function all() : array
    {
        $table = explode('\\', get_class(new static(new Connection)));
        $table = lcfirst($table[2]);
        $pdo = self::$connection->connectionDatabase()->prepare('SELECT * FROM ' . $table . '');
        $pdo->execute();
        $data = $pdo->fetchAll(PDO::FETCH_CLASS);
        return $data;
    }

    public static function find(int $id) : stdClass
    {
        $table = explode('\\', get_class(new static(new Connection)));
        $table = lcfirst($table[2]);
        $pdo = self::$connection->connectionDatabase()->prepare('SELECT * FROM ' . $table . ' WHERE ' .$id . ' = id');
        $pdo->execute();
        $data = $pdo->fetchObject();
        return $data;
    }
}
