<?php

$string = 'Hello World!';
if (stristr($string, 'earth') === false) {
    echo '"earth" not found in string';
}
// outputs: "earth" not found in string
