<?php

namespace Foobar;

class Foo {
    static public function test() {
        print "Hello world!\n";
    }
}

call_user_func(__NAMESPACE__ . '\Foo::test'); // As of PHP 5.3.0
call_user_func(array(__NAMESPACE__ .'\Foo', 'test')); // As of PHP 5.3.0
