<?php

var_dump(SODIUM_CRYPTO_GENERICHASH_BYTES);
var_dump(bin2hex(sodium_crypto_generichash('a')));
var_dump(bin2hex(sodium_crypto_generichash('a')));
var_dump(hash('', 'a'));
