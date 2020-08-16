<?php

class ArrayValue implements JsonSerializable
{
    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function jsonSerialize()
    {
        return $this->array;
    }
}

$array = ['foo' => 'bar', 'quux' => 'baz'];
echo json_encode(new ArrayValue($array), JSON_PRETTY_PRINT);
