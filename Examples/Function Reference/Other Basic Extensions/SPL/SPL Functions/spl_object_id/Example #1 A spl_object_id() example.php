<?php
$object = new stdClass();
$id = spl_object_id($object);
$storage[$id] = $object;

var_dump($storage);
