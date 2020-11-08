<?php

$fruits = array(
    "Orange1",
    "orange2",
    "Orange3",
    "orange20"
);
sort($fruits, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
