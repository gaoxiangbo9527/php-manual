<?php

//data you want to sign
$data = 'my data';

//create new private and public key
$private_key_res = openssl_pkey_new(
    array(
        "private_key_bits" => 2048,
        "private_key_type" => OPENSSL_KEYTYPE_RSA,
    )
);
$details = openssl_pkey_get_details($private_key_res);
$public_key_res = openssl_pkey_get_public($details['key']);

//create signature
openssl_sign($data, $signature, $private_key_res, "sha256WithRSAEncryption");

//verify signature
$ok = openssl_verify($data, $signature, $public_key_res, OPENSSL_ALGO_SHA256);
if ($ok == 1) {
    echo "valid";
} elseif ($ok == 0) {
    echo "invalid";
} else {
    echo "error: " . openssl_error_string();
}
