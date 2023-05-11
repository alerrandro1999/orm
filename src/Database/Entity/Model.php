<?php

namespace Alerr\Orm\Database\Entity;

use Alerr\Orm\Database\Interface\IModel;

use Alerr\Orm\Database\Connection;


class Model implements IModel
{

    public static function all()
    {
        $connection = new Connection();
        $obj = new static();
        $table = explode('\\', $obj->exibirNomeClasse());

        $table = lcfirst($table[3]);

        $pdo = $connection->connectionDatabase()->prepare('SELECT * FROM ' . $table . '');
        $pdo->execute();
        $data = $pdo->fetchAll();
        return $data;
    }

    public function exibirNomeClasse()
    {
        return get_class($this);
    }
}
