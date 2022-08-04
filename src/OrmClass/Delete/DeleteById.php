<?php

namespace Alerr\Orm\OrmClass\Delete;

use Alerr\Orm\Database\Connection;

class DeleteById extends Connection
{
    protected $query;
    protected $returnData;
    
    public function delete($id)
    {
        $this->query = $this->connectionDatabase()->prepare('DELETE FROM '.getenv('TABLE').' WHERE id= :a');
        $this->query->bindValue(":a", $id);
        $this->query->execute();
    }
}
