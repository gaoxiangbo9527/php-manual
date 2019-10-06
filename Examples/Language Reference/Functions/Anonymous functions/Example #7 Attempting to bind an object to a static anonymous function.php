<?php

$func = static function() {
    // function body
};
$func = $func->bindTo(new StdClass);
$func();
