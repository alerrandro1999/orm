<?php

namespace Helios\Trait;

use Helios\Database\Connection;

trait GetNameClass
{
    public static function name()
    {
        $table = explode('\\', get_class(new static(new Connection)));
        $table = lcfirst($table[2]);
        return $table;
    }
}
