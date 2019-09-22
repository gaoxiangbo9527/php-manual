<?php
function gen_one_to_three() {
    for ($i = 1; $i <= 3; ++$i) {
        yield $i;
    }
}

$generator = gen_one_to_three();
foreach ($generator as $key => $value) {
    echo "$key => $value\n";
}
