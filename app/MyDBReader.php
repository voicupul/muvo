<?php

namespace App;

use HaydenPierce\ClassFinder\ClassFinder;
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
//        $test = __NAMESPACE__ . '\\Models\\Post';
//        $reflect = new ReflectionClass(__NAMESPACE__ . '\\Models\\Post');
//        $fillableProperty = $reflect->getProperty('fillable');
//        $fillableProperty->setAccessible(true);
//        return $fillableProperty->getValue(new $test);
//        $testResult = array();
        $resultArray = array();
        $classes = ClassFinder::getClassesInNamespace('App\\Models');
        foreach ($classes as $myClass) {
            $reflect = new ReflectionClass($myClass);
            $fillableProperty = $reflect->getProperty('fillable');
            $fillableProperty->setAccessible(true);
            $resultArray[$myClass]  = $fillableProperty->getValue(new $myClass);
        }
        return $resultArray;
    }
}
