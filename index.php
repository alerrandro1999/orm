<?php

require __DIR__ . '/vendor/autoload.php';

use Helios\Environment\LoadVar;
use Helios\Model\Nome;
use Helios\OrmClass\Delete\DeleteById;
use Helios\OrmClass\Select\Select;
use Helios\OrmClass\SelectOnly\SelectOnlyById;

LoadVar::load(__DIR__);

dump(Nome::all());

// $select = new Select;

// $unique = new SelectOnlyById;

// $delete = new DeleteById;


// $dados = $select->selectTable();

// $unique = $unique->selectById(5);

// $delete->delete(5);

// echo '<pre>';
// print_r($dados);
// print_r($unique);
// echo '</pre>';

