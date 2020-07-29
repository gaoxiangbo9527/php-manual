<?php

$password = "password";
$iterations = 100000;

// Generate a random IV using openssl_random_pseudo_bytes()
// random_bytes() or another suitable source of randomness
$salt = random_bytes(16);

$hash = hash_pbkdf2("sha256", $password, $salt, $iterations);
echo $hash;
