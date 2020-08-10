<?php

mail(
    'nobody@example.com',
    'the subject',
    'the message',
    null,
    '-fwebmaster@example.com'
);
