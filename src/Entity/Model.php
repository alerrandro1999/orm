<?php

namespace Helios\Entity;

use Helios\Interface\IModel;

use Helios\Database\Connection;

class Model implements IModel
{

    public static function all()
    {
        $connection = new Connection();
        $table = explode('\\', get_class(new static()));
        $table = lcfirst($table[2]);

        $pdo = $connection->connectionDatabase()->prepare('SELECT * FROM ' . $table . '');
        $pdo->execute();
        $data = $pdo->fetchAll();
        return $data;
    }
}
