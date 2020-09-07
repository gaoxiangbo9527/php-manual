<?php

$state = sodium_crypto_generichash_init();
var_dump(bin2hex($state));
sodium_crypto_generichash_update($state, 'a');
var_dump(bin2hex($state));
