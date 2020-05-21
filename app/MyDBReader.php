<?php

namespace App;

use ReflectionClass;

class MyDBReader
{
    public $class;

    public function __construct($className)
    {
        $this->class = basename($className, '.php');
    }

    public function printProperties()
    {
        $test = __NAMESPACE__ . '\\Models\\Post';
        $reflect = new ReflectionClass(__NAMESPACE__ . '\\Models\\Post');
        $fillableProperty = $reflect->getProperty('fillable');
        $fillableProperty->setAccessible(true);
        return $fillableProperty->getValue(new $test);
    }
}
