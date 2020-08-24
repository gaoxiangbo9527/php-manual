<?php

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

var_dump(
    array_filter(
        $arr,
        function ($k) {
            return $k == 'b';
        },
        ARRAY_FILTER_USE_KEY
    )
);

var_dump(
    array_filter(
        $arr,
        function ($v, $k) {
            return $k == 'b' || $v == 4;
        },
        ARRAY_FILTER_USE_BOTH
    )
);
