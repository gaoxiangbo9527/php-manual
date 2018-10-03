<?php
class MyCollection implements IteratorAggregate
{
    private $items = [];
    private $count = 0;

    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }

    public function add($value) {
        $this->items[$this->count++] = $value;
    }
}

$coll = new MyCollection();
$coll->add('value 1');
$coll->add('value 2');
$coll->add('value 3');

foreach ($coll as $key => $val) {
    echo "key/value:[$key -> $val]\n\n";
}
