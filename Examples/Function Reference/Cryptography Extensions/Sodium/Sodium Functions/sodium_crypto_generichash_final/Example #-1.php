<?php

$state = sodium_crypto_generichash_init();
var_dump(bin2hex($state));
echo '<br>';
sodium_crypto_generichash_update($state, 'a');
var_dump(bin2hex($state));
echo '<br>';
var_dump(bin2hex(sodium_crypto_generichash_final($state)));
echo '<br>';
var_dump(bin2hex(sodium_crypto_generichash('a')));
echo '<br>';
