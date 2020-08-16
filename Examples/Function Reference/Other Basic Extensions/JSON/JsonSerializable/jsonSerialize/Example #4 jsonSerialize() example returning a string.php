<?php

class StringValue implements JsonSerializable
{
    public function __construct($string)
    {
        $this->string = (string)$string;
    }

    public function jsonSerialize()
    {
        return $this->string;
    }
}

echo json_encode(new StringValue('Hello!'), JSON_PRETTY_PRINT);
