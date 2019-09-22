<?php
class Test
{
    static public function getNew()
    {
        return new static;
    }

    public function getNew2()
    {
        return new static;
    }
}

class Child extends Test
{

}

$obj1 = new Test();
$obj1->var = 'obj1';

$obj2 = new $obj1;

var_dump($obj1 !== $obj2);
var_dump($obj1);
var_dump($obj2);

$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);

$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);

$obj5 = $obj1->getNew2();
var_dump($obj5 instanceof Test);

$obj6 = $obj4->getNew2();
var_dump($obj6 instanceof Child);