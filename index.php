<?php

require __DIR__ . '/vendor/autoload.php';

use Helios\Environment\LoadVar;
use Helios\Model\Nome;
use Helios\OrmClass\Delete\DeleteById;
use Helios\OrmClass\Select\Select;
use Helios\OrmClass\SelectOnly\SelectOnlyById;

LoadVar::load(__DIR__);

dump(Nome::all());

$nome = Nome::all();

foreach ($nome as $key => $value) {
   echo $value->nome . PHP_EOL;
}