<?php

function cmp($a, $b)
{
    return strcmp($a["fruit"], $b["fruit"]);
}

$fruits[0]["fruit"] = "lemons";
$fruits[1]["fruit"] = "apples";
$fruits[2]["fruit"] = "grapes";

usort($fruits, "cmp");

while (list($key, $value) = each($fruits)) {
    echo "\$fruits[$key]: " . $value["fruit"] . "\n";
}
