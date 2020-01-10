<?php

class obj implements ArrayAccess
{
    private $container = array();

    public function __construct()
    {
        $this->container = array(
            "one" => 1,
            "two" => 2,
            "three" => 3,
        );
    }

    public function offsetSet($offset, $value)
    {
        echo '调用' . __METHOD__ . "\n";

        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists($offset)
    {
        echo '调用' . __METHOD__ . "\n";

        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset)
    {
        echo '调用' . __METHOD__ . "\n";

        unset($this->container[$offset]);
    }

    public function offsetGet($offset)
    {
        echo '调用' . __METHOD__ . "\n";

        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
}

$obj = new obj;

//var_dump(isset($obj["two"]));
//var_dump($obj["two"]);
//unset($obj["two"]);

//var_dump(isset($obj["two"]));
//$obj["two"] = "A value";
//var_dump($obj["two"]);

$obj[] = 'Append 1';
$obj[] = 'Append 2';
$obj[] = 'Append 3';
print_r($obj);
