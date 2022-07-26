<?php

namespace Alerr\Orm\OrmClass\Select;

use Alerr\Orm\Database\Connection;

class Select extends Connection
{
    protected $query;
    protected $returnData;
    
    public function selectTable(string $table)
    {
        $this->query = $this->connectionDatabase()->prepare('SELECT * FROM '.$table.'');
        $this->query->execute();
        $this->returnData = $this->query->fetchAll();
        return $this->returnData;
    }
}
