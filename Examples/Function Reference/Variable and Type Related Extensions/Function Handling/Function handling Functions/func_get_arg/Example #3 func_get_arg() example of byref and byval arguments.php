<?php
function byVal($arg) {
    echo 'As passed     : ', var_export(func_get_arg(0)), PHP_EOL;
    $arg = 'baz';
    echo 'After change  : ', var_export(func_get_arg(0)), PHP_EOL;
}

function byRef(&$arg) {
    echo 'As passed     : ', var_export(func_get_arg(0)), PHP_EOL;
    $arg = 'baz';
    echo 'After change  : ', var_export(func_get_arg(0)), PHP_EOL;
}

$arg = 'bar';
byVal($arg);
byRef($arg);
