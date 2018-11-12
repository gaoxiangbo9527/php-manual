<?php
class foo {
    public function bar() {
    }
}
$obj = (object)true;
var_dump($obj);

$obj = (object)1;
var_dump($obj);

$obj = (object)2.0;
var_dump($obj);

$obj = (object)"string";
var_dump($obj);

$obj = (object)[];
var_dump($obj);

$obj = (object)['array', 'string key' => 2, 3 => '3'];
var_dump($obj);

$obj = (object)null;
var_dump($obj);

$obj = (object)(function () {});
var_dump($obj);
$a = function () {};
var_dump(gettype($a));
$obj = (object)$a;
var_dump($obj);


$obj = (object)(imagecreate(100, 100));
var_dump($obj);
var_dump($obj->scalar);
var_dump(gettype($obj->scalar));


