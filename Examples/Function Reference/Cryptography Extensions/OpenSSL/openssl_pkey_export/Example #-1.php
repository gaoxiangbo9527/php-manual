<?php

$config = array(
    "digest_alg" => "sha512",
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);

// Create the private and public key
$resource = openssl_pkey_new($config);

var_dump(openssl_pkey_export($resource, $privateKey));
var_dump($privateKey);

var_dump(openssl_pkey_export($resource, $privateKey, '123', [
//    'encrypt_key' => false,
    'encrypt_key_cipher' => OPENSSL_CIPHER_AES_256_CBC
]));
var_dump($privateKey);
