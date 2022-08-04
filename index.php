<?php

require __DIR__ . '/vendor/autoload.php';

use Alerr\Orm\Environment\LoadVar;
use Alerr\Orm\OrmClass\Delete\DeleteById;
use Alerr\Orm\OrmClass\Select\Select;
use Alerr\Orm\OrmClass\SelectOnly\SelectOnlyById;

LoadVar::load(__DIR__);

$select = new Select;

$unique = new SelectOnlyById;

$delete = new DeleteById;


$dados = $select->selectTable();

$unique = $unique->selectById(5);

$delete->delete(5);

echo '<pre>';
print_r($dados);
print_r($unique);
echo '</pre>';

