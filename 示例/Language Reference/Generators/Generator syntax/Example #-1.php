<?php
function gen_one_to_four() {
    for ($i = 1; $i <= 4; ++$i) {
        if (1 == $i) {
            yield $i;
        }

        if (2 == $i) {
            yield 'abc' => $i;
        }

        if (3 == $i) {
            yield 5 => $i;
        }

        if (4 == $i) {
            yield $i;
        }
    }
}

$generator = gen_one_to_four();
foreach ($generator as $key => $value) {
    echo "$key => $value\n";
}
