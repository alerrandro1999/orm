<?php

namespace Helios\Interface;

interface IModel 
{
    public static function all() : array;
    public static function find(int $id, string $args) : \stdClass;
}