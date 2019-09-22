<?php
class MyClass
{
    const CONST_VALUE = 'A constant value';
}

class OtherClass extends MyClass
{
    static public $my_static = 'static var';

    static public function doubleColon()
    {
        echo parent::CONST_VALUE . PHP_EOL;
        echo self::$my_static . PHP_EOL;
    }
}

$classname = 'OtherClass';
$classname::doubleColon();

OtherClass::doubleColon();
