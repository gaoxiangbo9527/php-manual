<?php
declare(ticks=1);

function my_function($param)
{
    echo 'my function';
}

// using a function as the callback
register_tick_function('my_function', true);

class my_class
{
    public function my_method()
    {
        echo 'my method';
    }
}

// using an object->method
$object = new my_class();
register_tick_function(array(&$object, 'my_method'), true);
