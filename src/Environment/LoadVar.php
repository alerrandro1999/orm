<?php

namespace Alerr\Orm\Environment;

class LoadVar
{
    public static function load($dir)
    {
        if (!file_exists($dir.'/.env')) {
            return false;
        }

        $lines = file($dir . '/.env');
        foreach ($lines as $line) {
            putenv(trim($line));
        }
    }

    public static function teste()
    {
        echo "deu certo";
    }
}