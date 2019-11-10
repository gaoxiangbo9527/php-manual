<?php

namespace MyProject;

class Test
{
    public function __toString()
    {
        return 'Test';
    }
}

function get($classname)
{
    $a = __NAMESPACE__ . '\\' . $classname;
    return new $a;
}

echo get('Test');
