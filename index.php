<?php

require __DIR__ . '/vendor/autoload.php';

use Alerr\Orm\Environment\LoadVar;

use Alerr\Orm\OrmClass\Select\Select;

LoadVar::load(__DIR__);

$select = new Select;

$dados = $select->selectTable('persistings');

echo '<pre>';
print_r($dados);
echo '</pre>';

