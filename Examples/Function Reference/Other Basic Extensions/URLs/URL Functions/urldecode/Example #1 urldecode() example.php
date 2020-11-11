<?php

$query = "my=apples&are=green+and+red";

foreach (explode('&', $query) as $chunk) {
    $param = explode("=", $chunk);

    if ($param) {
        printf("Value for parameter \"%s\" is \"%s\"<br/>\n", urldecode($param[0]), urldecode($param[1]));
    }
}
