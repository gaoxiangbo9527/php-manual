<?php
namespace Foo;
$value1 = true;
$value2 = 1;
$value3 = 'string';
$value4 = 2.22;
$value5 = [1, 2, '3'];

class Bar
{
    public $property1 = 'public';
    protected $property2 = 'protected';
    private $property3 = 'private';

    function baz() {
        echo $this->property3;
    }
}

$value6 = new Bar();

for ($i = 1; $i < 7; ++$i) {
    echo serialize(${'value' . $i});
    echo '<br>';
}

