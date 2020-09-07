<?php

//$key should have been previously generated in a cryptographically safe way, like openssl_random_pseudo_bytes
$key = 'ab';
$plaintext = "message to be encrypted";
$cipher = "aes-128-gcm";
if (in_array($cipher, openssl_get_cipher_methods(), true))
{
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivlen);
    $ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options=0, $iv, $tag);
    var_dump($ciphertext);
    //store $cipher, $iv, and $tag for decryption later
    $original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv, $tag);
    echo $original_plaintext."\n";
}
