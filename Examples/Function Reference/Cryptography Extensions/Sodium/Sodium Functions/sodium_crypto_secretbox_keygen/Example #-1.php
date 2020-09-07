<?php

var_dump(SODIUM_CRYPTO_SECRETBOX_KEYBYTES);

var_dump(bin2hex(sodium_crypto_secretbox_keygen()));
