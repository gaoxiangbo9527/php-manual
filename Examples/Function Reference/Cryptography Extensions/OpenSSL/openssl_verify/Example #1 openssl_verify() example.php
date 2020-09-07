<?php
// $data and $signature are assumed to contain the data and the signature

// fetch public key from certificate and ready it
$pubkeyid = openssl_pkey_get_public("file://src/openssl-0.9.6/demos/sign/cert.pem");

// state whether signature is okay or not
$ok = openssl_verify($data, $signature, $pubkeyid);
if ($ok == 1) {
    echo "good";
} elseif ($ok == 0) {
    echo "bad";
} else {
    echo "ugly, error checking signature";
}
// free the key from memory
openssl_free_key($pubkeyid);
