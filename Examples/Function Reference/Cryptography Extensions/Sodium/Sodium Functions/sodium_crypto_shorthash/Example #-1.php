<?php

var_dump(bin2hex(sodium_crypto_shorthash('a', sodium_crypto_shorthash_keygen())));
