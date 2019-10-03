<?php
function byVal($arg) {
    echo 'As passed     : ', var_export(func_get_args()), PHP_EOL;
    $arg = 'baz';
    echo 'After change  : ', var_export(func_get_args()), PHP_EOL;
}

function byRef(&$arg) {
    echo 'As passed     : ', var_export(func_get_args()), PHP_EOL;
    $arg = 'baz';
    echo 'After change  : ', var_export(func_get_args()), PHP_EOL;
}

$arg = 'bar';
byVal($arg);
byRef($arg);
