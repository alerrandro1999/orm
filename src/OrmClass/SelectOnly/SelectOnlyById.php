<?php

namespace Helios\OrmClass\SelectOnly;

use Helios\Database\Connection;

class SelectOnlyById extends Connection
{
    protected $query;
    protected $returnData;
    
    public function selectById(int $int)
    {
        $this->query = $this->connectionDatabase()->prepare('SELECT * FROM '.getenv('TABLE').' WHERE id = :a');
        $this->query->bindParam(':a', $int);
        $this->query->execute();
        $this->returnData = $this->query->fetch();
        return $this->returnData;
    }
}