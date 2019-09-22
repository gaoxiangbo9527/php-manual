<?php
function destroy_foo()
{
    global $foo;
    $foo = 'foo';
    unset($foo);
}

$foo = 'bar';
destroy_foo();
echo $foo;