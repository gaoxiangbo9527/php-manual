<?php

class IntegerValue implements JsonSerializable
{
    public function __construct($number)
    {
        $this->number = (integer)$number;
    }

    public function jsonSerialize()
    {
        return $this->number;
    }
}

echo json_encode(new IntegerValue(1), JSON_PRETTY_PRINT);
