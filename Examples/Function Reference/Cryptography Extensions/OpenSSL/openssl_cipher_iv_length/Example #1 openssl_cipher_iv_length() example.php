<?php

$method = 'AES-128-CBC';
$ivlen = openssl_cipher_iv_length($method);

echo $ivlen;
