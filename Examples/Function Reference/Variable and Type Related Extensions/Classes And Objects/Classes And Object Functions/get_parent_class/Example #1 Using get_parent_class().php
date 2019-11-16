<?php
class dad {
    function __construct()
    {
        // implements some logic
    }
}

class child extends dad {
    function __construct()
    {
        echo "I'm " , get_parent_class($this) , "'s son\n";
    }
}

class child2 extends dad {
    function __construct()
    {
        echo "I'm " , get_parent_class('child2') , "'s son too\n";
    }
}

$foo = new child();
$bar = new child2();
$baz = get_parent_class($foo);
echo $baz;
$baz2 = get_parent_class('dad');
var_dump($baz2);
