<?php

$config = array(
    "digest_alg" => "sha512",
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);

// Create the private and public key
$resource = openssl_pkey_new($config);

var_dump(openssl_pkey_export_to_file($resource, 'test.txt'));

var_dump(getcwd());
