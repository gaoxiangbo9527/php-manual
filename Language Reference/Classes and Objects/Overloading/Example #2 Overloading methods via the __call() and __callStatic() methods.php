<?php
class MethodTest
{
    public function __call($name, $arguments)
    {
        echo "Calling object method '$name' " . implode('，', $arguments) . "\n";
    }

    static public function __callStatic($name, $arguments)
    {
        echo "Calling static method '$name' " . implode('，', $arguments) . "\n";
    }
}

$obj = new MethodTest();
$obj->runTest('in object context');

MethodTest::runTest('in static context');