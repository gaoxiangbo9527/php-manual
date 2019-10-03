<?php

class Foo
{
    public function __construct() {}
    public function foo() {}
}

var_dump(
    is_callable(array('Foo', '__construct')),
    is_callable(array('Foo', 'foo')),
    is_callable(array(new Foo(), 'foo'))
);
