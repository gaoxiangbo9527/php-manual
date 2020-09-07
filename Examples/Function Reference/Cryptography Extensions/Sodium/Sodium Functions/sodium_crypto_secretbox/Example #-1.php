<?php

var_dump(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);

var_dump(SODIUM_CRYPTO_SECRETBOX_MACBYTES);

var_dump(
    bin2hex(
        sodium_crypto_secretbox(
            'abc',
            random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES),
            sodium_crypto_secretbox_keygen()
        )
    )
);
