<?php
function &get_instance_ref() {
    static $obj;

    echo 'Static object: ';
    var_dump($obj);
    if (!isset($obj)) {
        // Assign a reference to the static variable
        $temp = new stdClass();
        $obj = &$temp;
    }
    $obj->property++;
    return $obj;
}

function &get_instance_noref() {
    static $obj;

    echo 'Static object: ';
    var_dump($obj);
    if (!isset($obj)) {
        // Assign the object to the static variable
        $obj = new stdclass;
    }
    $obj->property++;
    return $obj;
}

$obj1 =& get_instance_ref();
var_dump($obj1);
$still_obj1 =& get_instance_ref();
var_dump($obj1);
var_dump($still_obj1);
//echo "\n";
//$obj2 = get_instance_noref();
//$still_obj2 = get_instance_noref();
