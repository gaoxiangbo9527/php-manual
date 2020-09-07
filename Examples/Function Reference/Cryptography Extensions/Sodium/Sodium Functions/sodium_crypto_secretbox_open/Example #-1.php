<?php

$nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
$key = sodium_crypto_secretbox_keygen();

$cipherText = bin2hex(sodium_crypto_secretbox('abc', $nonce, $key));
var_dump($cipherText);

var_dump(sodium_crypto_secretbox_open(hex2bin($cipherText), $nonce, $key));

