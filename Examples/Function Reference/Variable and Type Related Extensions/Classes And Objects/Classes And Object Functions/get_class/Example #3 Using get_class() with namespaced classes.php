<?php
namespace Foo\Bar;

class Baz {
    public function __construct()
    {

    }
}

$baz = new \Foo\Bar\Baz;
$baz = new Baz;

var_dump(get_class($baz));
