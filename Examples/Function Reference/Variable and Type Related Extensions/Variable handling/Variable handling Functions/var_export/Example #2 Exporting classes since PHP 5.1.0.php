<?php

class A {
    public $var;
    private $privateVar = 1;
}
$a = new A;
$a->var = 5;

var_export($a);
