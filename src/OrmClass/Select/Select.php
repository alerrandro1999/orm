<?php

namespace Alerr\Orm\OrmClass\Select;

use Alerr\Orm\Database\Connection;

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
