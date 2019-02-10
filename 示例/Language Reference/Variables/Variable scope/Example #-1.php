<?php
function test_global_ref() {
    global $obj;
    $obj = &new stdClass;
}

function test_global_noref() {
    global $obj;
    $obj = new stdClass;
}

test_global_ref();
var_dump($obj);
test_global_noref();
var_dump($obj);
