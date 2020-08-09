<?php

error_reporting(E_ALL | E_STRICT);
/* data actually came from POST
$_POST = array(
    'product_id' => 'libgd<script>',
    'component'  => array('10'),
    'version'    => '2.0.33',
    'testarray'  => array('2', '23', '10', '12'),
    'testscalar' => '2',
);
*/

$args = array(
    'product_id' => FILTER_SANITIZE_ENCODED,
    'component' => array(
        'filter' => FILTER_VALIDATE_INT,
        'flags' => FILTER_REQUIRE_ARRAY,
        'options' => array('min_range' => 1, 'max_range' => 10)
    ),
    'version' => FILTER_SANITIZE_ENCODED,
    'doesnotexist' => FILTER_VALIDATE_INT,
    'testscalar' => array(
        'filter' => FILTER_VALIDATE_INT,
        'flags' => FILTER_REQUIRE_SCALAR,
    ),
    'testarray' => array(
        'filter' => FILTER_VALIDATE_INT,
        'flags' => FILTER_REQUIRE_ARRAY,
    )

);

$myinputs = filter_input_array(INPUT_POST, $args);

var_dump($myinputs);
echo "\n";
