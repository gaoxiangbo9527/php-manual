<?php
trait foo { }
class bar {
    use foo;
}

print_r(class_uses(new bar));

print_r(class_uses('bar'));

function __autoload($class_name) {
    require_once $class_name . '.php';
}

// use __autoload to load the 'not_loaded' class
print_r(class_uses('not_loaded', true));
