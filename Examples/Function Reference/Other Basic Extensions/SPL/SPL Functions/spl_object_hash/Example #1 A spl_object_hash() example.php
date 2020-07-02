<?php
$object = new stdClass();
$id = spl_object_hash($object);
$storage[$id] = $object;

var_dump($storage);
