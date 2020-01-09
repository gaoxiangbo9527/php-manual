<?php
$a = [];
echo strval($a);
exit;

class StrValTest
{
    public function __toString()
    {
        return __CLASS__;
    }
}

// Prints 'StrValTest'
echo strval(new StrValTest);
