<?php

for ($i = 1; $i <= 4; $i++) {
    $bytes = openssl_random_pseudo_bytes($i, $cstrong);
    $hex = bin2hex($bytes);

    echo "Lengths: Bytes: $i and Hex: " . strlen($hex) . PHP_EOL;
    var_dump($hex);
    var_dump($cstrong);
    echo PHP_EOL;
}
