<?php
class myIterator implements Iterator
{
    private $position = 0;
    private $array = [
        'firstelement',
        'secondselement',
        'lastelement',
    ];

    public function __construct()
    {
        $this->position = 0;
    }

    public function rewind()
    {
        var_dump(__METHOD__);
        $this->position = 0;
    }

    public function current()
    {
        var_dump(__METHOD__);
        return $this->array[$this->position];
    }

    public function next()
    {
        var_dump(__METHOD__);
        ++$this->position;
    }

    public function key()
    {
        var_dump(__METHOD__);
        return $this->position;
    }

    public function valid()
    {
        var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }
}

$it = new MyIterator();

foreach ($it as $key => $value)
{
    var_dump($key, $value);
    echo "<br>";
}

echo '<br>';

foreach ($it as $value)
{
    var_dump($value);
    echo "<br>";
}