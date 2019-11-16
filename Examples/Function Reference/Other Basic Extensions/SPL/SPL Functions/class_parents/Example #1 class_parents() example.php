<?php
class foo { }
class bar extends foo {}
class baz extends bar {}

print_r(class_parents(new bar));

// since PHP 5.1.0 you may also specify the parameter as a string
print_r(class_parents('bar'));

print_r(class_parents('baz'));

function __autoload($class_name) {
    require_once $class_name . '.php';
}

// use __autoload to load the 'not_loaded' class
print_r(class_parents('not_loaded', true));
