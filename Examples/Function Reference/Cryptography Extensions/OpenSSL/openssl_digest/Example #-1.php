<?php

var_dump(openssl_digest('a', 'md5'));
var_dump(hash('md5', 'a'));

var_dump(openssl_digest('a', 'sha1'));
var_dump(hash('sha1', 'a'));
