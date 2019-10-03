<?php

namespace Foobar;

class Foo {
    static public function test($name) {
        print "Hello {$name}!\n";
    }
}

// As of PHP 5.3.0
call_user_func_array(__NAMESPACE__ .'\Foo::test', array('Hannes'));

// As of PHP 5.3.0
call_user_func_array(array(__NAMESPACE__ .'\Foo', 'test'), array('Philip'));
