<?php
function test_global_ref() {
    global $obj;
    $temp = new stdClass();
    $obj = &$temp;
}

function test_global_noref() {
    global $obj;
    $obj = new stdClass;
}
//var_dump(get_defined_vars());
test_global_ref();
var_dump($obj);
test_global_noref();
var_dump($obj);
