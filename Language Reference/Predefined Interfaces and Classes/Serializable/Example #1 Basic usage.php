<?php
class obj implements Serializable
{
    private $data;

    public function __construct()
    {
        $this->data = 'My private data';
    }

    public function serialize()
    {
        return serialize($this->data);
    }

    public function unserialize($serialized)
    {
        $this->data = unserialize($serialized);
    }

    public function getData()
    {
        return $this->data;
    }
}

$obj = new obj;
$ser = serialize($obj);

var_dump($ser);

$newObj = unserialize($ser);
var_dump($newObj->getData());
