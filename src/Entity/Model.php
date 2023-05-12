<?php

namespace Helios\Entity;

use Helios\Interface\IModel;
use Helios\Database\Connection;
use PDO;
use stdClass;
use Helios\Trait\GetNameClass;

class Model implements IModel
{
    protected static $connection;

    use GetNameClass;

    public function __construct(Connection $connection)
    {
        self::$connection = $connection;
    }

    public static function all(): array
    {
        $name = self::name();
        $pdo = self::$connection->connectionDatabase()->prepare('SELECT * FROM ' . $name . '');
        $pdo->execute();
        $data = $pdo->fetchAll(PDO::FETCH_CLASS);
        return $data;
    }

    public static function find(int $id): stdClass
    {
        $name = self::name();
        $pdo = self::$connection->connectionDatabase()->prepare('SELECT * FROM ' . $name . ' WHERE ' . $id . ' = id');
        $pdo->execute();
        $data = $pdo->fetchObject();
        return $data;
    }
}
