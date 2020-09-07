<?php

$ciphers = openssl_get_cipher_methods();
$ciphers_and_aliases = openssl_get_cipher_methods(true);
$cipher_aliases = array_diff($ciphers_and_aliases, $ciphers);

//ECB mode should be avoided
$ciphers = array_filter(
    $ciphers,
    function ($n) {
        return stripos($n, "ecb") === false;
    }
);

//At least as early as Aug 2016, Openssl declared the following weak: RC2, RC4, DES, 3DES, MD5 based
$ciphers = array_filter(
    $ciphers,
    function ($c) {
        return stripos($c, "des") === false;
    }
);
$ciphers = array_filter(
    $ciphers,
    function ($c) {
        return stripos($c, "rc2") === false;
    }
);
$ciphers = array_filter(
    $ciphers,
    function ($c) {
        return stripos($c, "rc4") === false;
    }
);
$ciphers = array_filter(
    $ciphers,
    function ($c) {
        return stripos($c, "md5") === false;
    }
);
$cipher_aliases = array_filter(
    $cipher_aliases,
    function ($c) {
        return stripos($c, "des") === false;
    }
);
$cipher_aliases = array_filter(
    $cipher_aliases,
    function ($c) {
        return stripos($c, "rc2") === false;
    }
);

print_r($ciphers);
