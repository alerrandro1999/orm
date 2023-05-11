<?php

namespace Helios\OrmClass\Select;

use Helios\Database\Connection;

class Select extends Connection
{
    protected $query;
    protected $returnData;
    
    public function selectTable()
    {
        $this->query = $this->connectionDatabase()->prepare('SELECT * FROM '.getenv('TABLE').'');
        $this->query->execute();
        $this->returnData = $this->query->fetchAll();
        return $this->returnData;
    }
}
