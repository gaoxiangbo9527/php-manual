<?php

$ar = array(
    array("10", 11, 100, 100, "a"),
    array(1, 2, "2", 3, 1)
);
array_multisort(
    $ar[0],
    SORT_ASC,
    SORT_STRING,
    $ar[1],
//    SORT_NUMERIC,
//    SORT_DESC
);
var_dump($ar);
