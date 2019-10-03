<?php
class CustomError extends AssertionError {}

assert(true == false, new CustomError('True is not false!'));
echo 'Hi!';
