<?php
class BaseClass
{
    function __construct()
    {
        print "In BaseClass constructor\n";
    }
}

class SubClass extends BaseClass
{
    function __construct()
    {
        parent::__construct();
        print "In SubClass constructor\n";
    }
}

class OtherSubClass extends BaseClass
{

}

$obj = new BaseClass();

$obj = new SubClass();

$obj = new OtherSubClass();
