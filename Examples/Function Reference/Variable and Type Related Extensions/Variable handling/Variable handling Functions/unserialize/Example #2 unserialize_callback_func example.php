<?php
$serializedObject='O:1:"a":1:{s:5:"value";s:3:"100";}';

ini_set('unserialize_callback_func', 'myCallback');

function myCallback($className) {
    echo $className;
}

$result = unserialize($serializedObject);
var_dump($result);