<?php
class MyClass
{
    const CONSTANT = 'contant value';

    function showContant()
    {
        echo self::CONSTANT . "\n";
    }
}

echo MyClass::CONSTANT . "\n";

$classname = "MyClass";
echo $classname::CONSTANT . "\n";

$class = new MyClass();
$class->showContant();

echo $class::CONSTANT . "\n";